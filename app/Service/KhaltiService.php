<?php
namespace App\Services\Payment;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
class KhaltiService{
  protected const BASE_URL = "https://a.khalti.com/api/v2";
  public function initiatePayment(string $url,array $payload)
{
    $key = config('services.khalti.secret_key');
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Key ', // Replace with your actual authorization token
    ])->post($url, $payload);
    return $response;
}
}