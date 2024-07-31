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
    public function showAddForm()
    {
        $products = Product::all(); // Fetch all products
        return view('cart.add', compact('products'));

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
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Create a new cart item
        CartItem::create([
            'product_id' => $request->input('product_id'),
            'user_id' => $user->id,
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart.index')->with('success', 'Item added to cart successfully!');
    }



}



