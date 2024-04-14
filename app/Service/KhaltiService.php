<?php
namespace App\Services\Payment;
use Illuminate\Support\Facades\Http;
use App\Builders\UserBuilder;
use App\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
class HeaderService
{
  public function initiatePayment(string $url,array $payload)
{
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'Key de96e1679a244f81a2357968833c052f', // Replace with your actual authorization token
    ])->post($url, $payload);
    return $response;
}
}