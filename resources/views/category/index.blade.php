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
                    <table class="table table-stiped table-bordard">

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td> </td>



                            </tr>
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>











@endsection
