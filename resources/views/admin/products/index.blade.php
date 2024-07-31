@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Products</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add New Product</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 50px;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
