<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\app\Service\KhaltiService;
use Illuminate\app\model\Payment;

use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    //
    public function paymentCheckout()
    {
        try {

            $user = auth()->user();
            $cart = Cart::where('email', $user->email)->first();

            $data = [
                'price' => $cart->price,
                'purchase_order_name' => $cart->firstname,
                'purchase_order_id' => $cart->id
            ];

            $payload = [
                'return_url' => 'https://127.0.0.1:8000/success?',
                'website_url' => 'http://127.0.0.1:8000/',
                'amount' => $data['price'],
                'purchase_order_id' => $data['purchase_order_id'],
                'purchase_order_name' => $data['purchase_order_name'],

                "customer_info" => [
                    "name" => "Kitab Rental",
                    "email" => "kyanite@gmail.com",
                    "phone" => "9800000123"
                ]
            ];

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Key de96e1679a244f81a2357968833c052f'
            ])->post('https://a.khalti.com/api/v2/epayment/initiate/', $payload);

            if ($response->successful()) {
                $responseData = $response->json();

                return redirect()->away($responseData['payment_url']);
            }
        } catch (ClientException $e) {
            throw $e;
        }

       
        
    }



    // public function completePayment(Request $request){
    //     $response = Payment::ePaymentValidationRequest($request);
    //     return $response;
    // }







    public function success(Request $request)
    {
//        dd($request->all());
        // Access data from the request
        $data = $request->all();


        $data = $request->input('Price');
        $data = $request->input('purchase_order_name');
        $bookedDatePidx = $request->input('booked_date');

        $questionMarkPosition = strpos($bookedDatePidx, '?');

// Extract 'start_time' and 'pidx' based on the position of '?'
        $bookedDate = substr($bookedDatePidx, 0, $questionMarkPosition);
        $pidx = substr($bookedDatePidx, $questionMarkPosition + 6);
//        dd($pidx);
//        dd($startTime);

        $bookingId = $data['purchase_order_id'];

        $payload = [
            'pidx' => $pidx,

        ];

        $url = 'https://a.khalti.com/api/v2/epayment/lookup/';

        $response = $this->headerService->initiatePayment($url, $payload);
        $responseData = $response->json();

        $redirectUrl = 'https://test-pay.khalti.com/wallet?pidx=' . $responseData['pidx'];

        if (isset($responseData['status']) && $responseData['status'] === 'Completed') {

            $this->transactionService->transaction($responseData, $bookingId);
            return redirect('/checkout/success/url')->with([
                'bookedDate' => $bookedDate,
                // 'startTime' => $startTime,
                'bookingId' => $bookingId,
                'message' => 'Payment success', // Or any other message you want to send
                'responseData' => $responseData,
            ]);

//            return redirect()->back()->with('message', 'payment successfull');
        } elseif ($responseData['status'] === 'Pending' || $responseData['status'] === 'Failed' || $responseData['status'] === 'Expired' || $responseData['status'] === 'User canceled') {
            $this->transactionService->transaction($responseData, $bookingId);


            return redirect('/checkout/success/url')->with([
                'bookedDate' => $bookedDate,

                // 'startTime' => $startTime,

                'bookingId' => $bookingId,
                'message' => $responseData['status'], // Or any other message you want to send
                'responseData' => $responseData,
            ]);

        } else {
            $this->transactionService->transaction($responseData, $bookingId);

            return redirect()->back()->with('error', 'Error!!');
        }
    }
}
