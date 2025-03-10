@extends('frontend.index')
@section('content')
<div class="container">
    <h1 class="page-title">Products
    <form action="/admin/products/create" method="GET">
         <input type="submit" value="Create new product" class="btn btn-primary" required>
    </form></h1>




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
                    <td>{{ number_format($product->price, 2) }}</td>
                    <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

<style>
/* Container Styles */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.page-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.create-product-form {
    margin: 0;
}

.btn-primary {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}


.mt-3 {
    margin-top: 1rem;
}

.mt-5 {
    margin-top: 3rem;
}

/* Table Styles */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table thead {
    background-color: #f8f9fa;
}

.table th, .table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.table th {
    background-color: #f1f1f1;
    color: #333;
    font-weight: bold;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

.table img {
    width: 50px;
    height: auto;
    border-radius: 4px;
}

/* Form Styles */
.product-form .form-group {
    margin-bottom: 20px;
}

.product-form label {
    font-weight: bold;
}

.product-form .form-control {
    border-radius: 4px;
    padding: 10px;
    border: 1px solid #ddd;
    width: 100%;
    box-sizing: border-box;
}

.product-form .form-control:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
@endsection
