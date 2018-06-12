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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span>
                                </button>
                                <strong>{!! Session('flash_message_error')!!}</strong>
                            </div>
                        @endif
                        @if(Session::has('flash_message_success'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span>*</span></button>
                                <strong>{!! Session('flash_message_success')!!}</strong>
                                @endif

                                <div class="form-validation">
                                    <form enctype="multipart/form-data" name="add_attributes" id="add_attributes"
                                          class="add_attributes" action="{{url('/Admin/add_attributes/'.$vehicleDetails->id)}}"
                                          method="post">{{ csrf_field() }}
                                        <Input type="hidden" name="vehicle_id" value="{{$vehicleDetails->id}}" ></form>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_name">Vehicle Name</label>
                                            <label class="col-lg-4 col-form-label" for="vehicle_name">{{$vehicleDetails->vehicle_name}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_Brand">Vehicle Brand</label>
                                            <label class="col-lg-4 col-form-label" for="vehicle_Brand">{{$vehicleDetails->vehicle_Brand}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="model_year">Model year </label>
                                            <label class="col-lg-4 col-form-label" for="model_year">{{$vehicleDetails->model_year}}</label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"> </label>
                                            <div class="field_wrapper">
                                                <div>
                                                    <input type="text" name="sku[]" id="sku" placeholder="SKU" style="width:80px;"/>
                                                    <input type="text" name="additional_driver[]" id="additional_driver" placeholder="Additional Driver" style="width:80px;"/>
                                                    <input type="text" name="baby_sit[]" id="baby_sit" placeholder="Baby Sit" style="width:80px;"/>
                                                    <input type="text" name="personal_insurance[]" id="personal_insurance" placeholder="Personal Insurance" style="width:80px;"/>
                                                    <input type="text" name="price[]" id="price" placeholder="Price" style="width:80px;"/>
                                                    <input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:80px;"/>
                                                    <a href="javascript:void(0);" class="add_button  btn btn-success btn-xs btn-addon m-b-10 m-l-5" style="width:46px;" title="Add field">Add</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" value="add_attributes" class="btn btn-primary">Add
                                                    Vehicle Attributes
                                                </button>
                                            </div>
                                        </div>
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
