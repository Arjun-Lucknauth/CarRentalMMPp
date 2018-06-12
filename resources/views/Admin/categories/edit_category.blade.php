@extends('layouts.AdminLayout.Admin_Design')
@section('content')
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                  <span class="row d-flex justify-content-center">Edit Category</span>
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
                                    <form class="form-validate" name="edit_category" id="edit_category" method="post" action="{{url(
                                    '/Admin/edit_category/'.$categoryDetails->id)}}">{{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for ="category_name" class="col-lg-4 col-form-label" >Category Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" id="category_name" value="{{'$categoryDetails->name'}}" name="category_name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for ="Sub_category" class="col-lg-4 col-form-label" >Sub Category</label>
                                            <div class="col-lg-6">
                                                <select name="parent_id">
                                                    <option value="0">Main Category</option>
                                                    @foreach($SubCat as $val)
                                                        <option value="{{$val->id}}" @if($val ->id ==$categoryDetails->parent_id)selected @endif >{{$val->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="description">Description<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea  id="description"   name="description"  placeholder="Enter description " style="height:250px">value="{{'$categoryDetails->description'}}" </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="url" class="col-lg-4 col-form-label" >URL <span class="text-danger">*</span></label>
                                            <div class="col-lg-6" >
                                                <input type="text" value="{{'$categoryDetails->url'}}" class="form-control" id="url" name="url"  >
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Update Category</button>
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
