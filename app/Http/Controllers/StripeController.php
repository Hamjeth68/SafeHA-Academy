<?php

namespace App\Http\Controllers;

use App\Models\CurrencyRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function checkout()
    {
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_ENjlKW3jcKVquuhpGL7cIga8005cF2laV0');

        if(Session::has('cart')) {

            $rates = CurrencyRate::where('code', 'USD')->first();

            $cart = Session::get('cart');

            $cart->updateCurrency($rates);
            Session::put('cart', $cart);

            $data = (Session::get('cart'));
            $totalamount = $data->totalPrice;

            $payment_intent = \Stripe\PaymentIntent::create([
                'description' => 'Stripe Test Payment',
                'amount' => (float) $totalamount * 100,
                'currency' => 'USD',
                'description' => 'Payment From SafeEnviro',
                'payment_method_types' => ['card'],
            ]);

            $intent = $payment_intent->client_secret;
            dd($intent);
            return view('payment', compact('intent'));
        }
    }

    public function afterPayment()
    {

    }
}
