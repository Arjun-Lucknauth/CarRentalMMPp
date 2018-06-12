@extends('layouts.AdminLayout.Admin_Design')
@section('content')

     <div class="container-fluid">
         <!-- Start Page Content -->
        <div class="row ">
            <div class="col-12">
        <div class="card">
        <div class="card-body d-flex align-content-center">
            <h4 class="card-title ">View Category</h4>
            <h6 class="card-subtitle">You can view or delete categories</h6>
            <div class="table-responsive m-t-40  ">
                <table id="myTable" class="table table-bordered table-striped  ">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>SubCategory</th>
                        <th>Description</th>
                        <th>URL</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category ->id}}</td>
                        <td>{{$category ->name}}</td>
                        <td>{{$category ->parent_id}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category ->url}}</td>
                        <td >
                            <div class="btn-group">
                                <a href="{{url('/Admin/edit_category/'.$category ->id)}}" type="button" role="button" class="btn btn-primary btn-outline btn-rounded m-b-10 m-l-5">Edit</a>
                                <a href="{{url('/Admin/delete_category/'.$category ->id)}}" id="deleteCat" type="button" role="button" class="btn btn-danger btn-outline btn-rounded m-b-10 m-l-5">Delete</a>
                                <div class="btn-group"></div>
                            </div>
                        </td>
                    </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>



@endsection
