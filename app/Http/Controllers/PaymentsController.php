<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Square\SquareClient;
use Square\Exceptions\ApiException;
use Square\Models\CreatePaymentRequest;
use Square\Models\Money;

class PaymentsController extends Controller
{
    public function processPayment(PaymentRequest $request)
    {
        // verify that user does not have a pending booking with that email address
        // create booking and save to database

        $client = new SquareClient([
            'accessToken' => env('SQUARE_KEY'),
            'environment' => env('SQUARE_ENVIRONMENT'),
        ]);

        $payments_api = $client->getPaymentsApi();
        try {
            $money = new Money();
            $money->setAmount(config('app.square.base_price') * 100);
            $money->setCurrency(config('app.square.currency'));
            $create_payment_request = new CreatePaymentRequest($request->token, $request->idempotencyKey);
            $create_payment_request->setAmountMoney($money);
            $create_payment_request->setLocationId(config('square.location_id'));

            $response = $payments_api->createPayment($create_payment_request);

            // if successful, send a mail to the customer
            // send a mail to the admin to notify of payment

            return
                $response->isSuccess() ?
                response()->json(['success' => true, 'message' => 'Payment Successful', 'data' => $response->getResult()], 200) :
                response()->json(['success' => false, 'message' => 'Something went wrong', 'data' =>  $response->getResult()], 400);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['success' => false, 'message' => $th->getMessage(), 'data' => ''], 500);
        }
    }
}
