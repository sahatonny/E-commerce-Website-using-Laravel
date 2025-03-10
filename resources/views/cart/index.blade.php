@extends('frontend.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Shopping Cart</h1>
        <!-- Your cart HTML content here -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($items) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-warning">Delete</a>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item['product']->name }}</td>
                        <td>
                            <form action="{{ route('admin/cart/update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </td>
                        <td>{{ $item['product']->price }}</td>
                        <td>{{ $item['product']->price * $item['quantity'] }}</td>
                        <td>
                            <form action="{{ route('admin/cart/remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['product']->id }}">
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif

    </div>
</body>
</html>
@endsection





















