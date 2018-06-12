@extends('layouts.AdminLayout.Admin_Design')
@section('content')

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span >&times;</span></button>
                                <strong>{!! Session('flash_message_error')!!}</strong>
                            </div>
                        @endif
                        @if(Session::has('flash_message_success'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span ></span></button>
                                    <strong>{!! Session('flash_message_success')!!}</strong>
                                    @endif

                                    <div class="form-validation">
                                    <form class="add_category" name="add_category" id="add_category" action="{{url('/Admin/add_category')}}" method="post">{{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category_name">Category Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Insert Category's Name">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="SubCategory">Sub Category</label>
                                            <div class="col-lg-6">
                                                <select name="parent_id">
                                                    <option value="0">Main Category</option>
                                                    @foreach($SubCat as $val)
                                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="description">Description<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea id="description" name="description" placeholder="Enter description ..." style="height:250px"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="status" name="status" placeholder="value 1 or 0">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="URL">URL <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="URL" name="URL" placeholder="URL">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>







@endsection
