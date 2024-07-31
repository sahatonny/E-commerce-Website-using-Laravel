<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;

class Cart
{
    public function getItems()
    {
        return Session::get('cart', []);
    }

    public function addItem($product, $quantity)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }
        Session::put('cart', $cart);
    }

    public function updateItem($productId, $quantity)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            Session::put('cart', $cart);
        }
    }

    public function removeItem($productId)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            Session::put('cart', $cart);
        }
    }

    public function clear()
    {
        Session::forget('cart');
    }
}
