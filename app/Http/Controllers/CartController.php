<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $items = $this->cart->getItems();
        return view('cart.index', compact('items'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        $quantity = $request->input('quantity', 1);
        $this->cart->addItem($product, $quantity);
        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $this->cart->updateItem($productId, $quantity);
        return redirect()->route('cart.index')->with('success', 'Cart updated!');
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $this->cart->removeItem($productId);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart!');
    }
}
