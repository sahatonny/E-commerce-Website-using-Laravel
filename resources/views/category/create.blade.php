@extends('layouts.frontend')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Categories List</h4>
                    <a href="{{ url('category/create') }}" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                            @error('name') {{ $message}} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" rows="3" class="form-control" id="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input name="number" class="form-control" id="amount"></input>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="status" class="form-check-input" id="status" checked>
                            <label class="form-check-label" for="status"></label>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
