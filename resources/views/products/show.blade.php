@extends('frontend.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h1></h1>
            <p></p>
            <p></p>
            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="">
                <input type="number" name="quantity" value="1" min="1" class="form-control" style="width: 100px; display: inline-block;">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection
