@extends('layouts.frontend')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Cart Details</h1>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                    <tr>

                        <td><form action="{{ route('cart.update') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="name">
                            <input type="number" name="quantity" value="" min="1">
                        </form>
                        </td>

                        <td>
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="name">
                                <input type="number" name="quantity" value="" min="1">
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="">
                                <input type="number" name="quantity" value="" min="1">
                            </form>
                        </td>

                        <td><form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="">
                            <input type="number" name="quantity" value="" min="1">
                            </form>
                        </td>

                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="">

                                <button type="submit" class="btn btn-sm btn-primary" action="{{ route('cart.add') }}">Add</button>
                                <button type="submit" class="btn btn-sm btn-primary" action="{{ route('cart.remove') }}">Remove</button>
                                <button type="submit" class="btn btn-sm btn-primary" action="{{ route('cart.update') }}">Update</button>
                                <button type="submit" class="btn btn-sm btn-primary" action="{{ route('cart.edit') }}">Edit</button>

            </tbody>
                            </form>
                        </td>
                    </tr>

        </table>



    </div>
</body>
</html>
@endsection
