<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;
use Square\SquareClient;
use Square\Exceptions\ApiException;

class PaymentsController extends Controller
{
    //
    public function processPayment(PaymentRequest $request)
    {
        $client = new SquareClient([
            'accessToken' => env('SQUARE_ACCESS_TOKEN'),
            'environment' => env('SQUARE_ENVIRONMENT'),
        ]);

        $paymentsApi = $client->getPaymentsApi();

        try {
            // $response = $paymentsApi->createPayment();

            // return response()->json(['success' => true, 'payment' => $response->getResult()]);
        } catch (ApiException $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
