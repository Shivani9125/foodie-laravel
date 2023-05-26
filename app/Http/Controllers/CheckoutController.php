<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Product;
use Stripe\Price;
use Stripe\Checkout\Session;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Set your Stripe API key
        Stripe::setApiKey('sk_test_51N5VY6SCZTvjnX6A4PobZQUTylfqahQBaZ5W9VJVOxojTWkJIkfsBJiotsUed3iX1GMYUyzNA3flgDxFLBQMxNfj00eapBhA36');

        // Create a product
        $product = Product::create([
            'name' => 'My Product',
            'type' => 'service',
        ]);

        // Create a price for the product
        $price = Price::create([
            'unit_amount' => 450,
            'currency' => 'inr',
            'product' => $product->id,
        ]);

        // Create a new checkout session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $price->id,
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000',
            'cancel_url' => 'http://localhost/cancel.html',
        ]);

        // Redirect the user to the checkout page
        return redirect($session->url);
    }
}
