@extends('layouts.frontend')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Categories List</h4>
                    <a href="{{ url('category/create') }}" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label> Name </label>
                            <label type="text" name="name" class="form-control"></label>

                        </div>
                        <div class="mb-3">
                            <label>Description
                                <textarea name="description" rows="3" class="form-control"></textarea>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label> Status </label>
                        </br>
                            <input type="checkbox" name="status" checked style="width:30px; height:20px" /> Checked = visible, unchecked = hidden

                        </div>
                        <div class="mb-3">
                            <button type ="submit" class="btn btn-primary">Save</button>

                        </div>


                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
