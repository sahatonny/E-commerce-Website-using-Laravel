@extends('layouts.frontend')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Categories List</h4>
                    <a href="{{ url('category/create') }}" class="btn btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dummy data for illustration -->
                            <tr>
                                <td>1</td>
                                <td>Category 1</td>
                                <td>Description</td>
                                <td>Visible</td>
                                <td>
                                    <a href="{{ url('category/edit/1') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('category/delete/1') }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Category 2</td>
                                <td>Description</td>
                                <td>Hidden</td>
                                <td>
                                    <a href="{{ url('category/edit/2') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('category/delete/2') }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Category 3</td>
                                <td>Description</td>
                                <td>Hidden</td>
                                <td>
                                    <a href="{{ url('category/edit/3') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('category/delete/3') }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Category 4</td>
                                <td>Description</td>
                                <td>Visible</td>
                                <td>
                                    <a href="{{ url('category/edit/4') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('category/delete/4') }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Category 5</td>
                                <td>Description</td>
                                <td>Hidden</td>
                                <td>
                                    <a href="{{ url('category/edit/5') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('category/delete/5') }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
