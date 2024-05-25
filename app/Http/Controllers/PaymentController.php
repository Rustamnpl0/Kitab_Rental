<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\app\Service\KhaltiService;
use Illuminate\app\model\Payment;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
     protected const BASE_URL = "https://a.khalti.com/api/v2";

     public function paymentCheckout(Cart $cart)
    {
         $uniqueIdentifier = uniqid();
         $payload = [
              'return_url'          => route('payment.success', Crypt::encrypt($cart->id)),
              'website_url'         => config('app.url'),
              'amount'              => is_numeric($cart->price) ? $cart->price * 100 : 100*100,
              'purchase_order_id'   => $uniqueIdentifier,
              'purchase_order_name' => $cart->BooksName,
              "customer_info" => [
                   "name"  => auth()->user()->firstname.' '.auth()->user()->lastname,
                   "email" => auth()->user()->email,
              ]
         ];

         $secretKey = config('services.khalti.secret_key');

         $response = Http::acceptJson()->withHeaders([
              'Authorization' => "Key $secretKey"
        ])->post(self::BASE_URL.'/epayment/initiate/', $payload);
         if ($response->successful()) {
             $responseData = $response->json();
             return redirect()->away($responseData['payment_url']);
         }else{
              return redirect()->back();
         }

    }


    public function success($cart_id, Request $request)
    {
         $cart_id = Crypt::decrypt($cart_id);
         $cart = Cart::query()->find($cart_id);
         if($request->input('status') === 'Completed'){
               Order::query()->create([
                    'transaction_id' => $request->input('transaction_id'),
                    'amount'         => $request->input('amount'),
                    'booksName'      => $request->input('purchase_order_name'),
               ]);
               $cart?->delete();
               return redirect()->route('home')->with(['toastr.success' => 'Order created successfully']);
          }else{
              return redirect()->route('home')->with(['toastr.error' => 'Could not create order. Please try again']);
         }
    }
}
