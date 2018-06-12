@extends('layouts.AdminLayout.Admin_Design')
@section('content')
    @include('sweetalert::alert')
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
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span >*</span></button>
                                <strong>{!! Session('flash_message_success')!!}</strong>
                                @endif

                                <div class="form-validation">
                                    <form enctype="multipart/form-data" class="edit_vehicle" name="edit_vehicle" id="edit_vehicle" action="{{url('/Admin/edit_vehicle/'.$vehicleDetails ->id)}}" method="post">{{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Select_Category">Select Category <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="category_id" name="category_id">
                                                    <?php echo $categories_dropdown;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_name">Vehicle Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="vehicle_name" name="vehicle_name" placeholder="Insert Vehicle's Name" value="{{$vehicleDetails->vehicle_name}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for=" price_per_day"> Price per day <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="price_per_day" name=" price_per_day" placeholder=" price per day" value="{{$vehicleDetails->price_per_day}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_Brand">Vehicle Brand <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="vehicle_Brand" name="vehicle_Brand" placeholder="Insert vehicle Brand" value="{{$vehicleDetails->vehicle_Brand}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="model_year">Model year <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="model_year" name="model_year" placeholder="Insert model year" value="{{$vehicleDetails->model_year}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_color">Vehicle color <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="vehicle_color" name="vehicle_color" placeholder="Insert vehicle color" >
                                                <input type="hidden" value="{{$vehicleDetails->vehicle_color}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="image">Image</label>
                                            <div class="col-lg-6">
                                                <input type="file"  id="image" name="image" >
                                                <input type="hidden" name="current_image" value="{{$vehicleDetails->image}}">
                                                @if (!empty($productDetails->image))
                                                <img style="width:65px;" src="{{asset('/images/backend_images/vehicle/small/'.$vehicleDetails->image)}}">| <a href="{{ url('/Admin/delete_image/'.$vehicleDetails->id )}}">Delete</a>
                                                    @endif
                                             </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="vehicle_year">Vehicle year <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="vehicle_year" name="vehicle_year" placeholder="Insert vehicle year" value="{{$vehicleDetails->vehicle_year}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="status" name="status" placeholder="Insert status" value="{{$vehicleDetails->status}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="seating_capacity">Seating capacity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="seating_capacity" name="seating_capacity" >
                                                    <option type="hidden" value="{{$vehicleDetails->seating_capacity}} ">Please select</option>
                                                    <option value="2">2</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="15">15</option>
                                                    <option value="22">22</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="fuel_type">Fuel type<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="fuel_type" name="fuel_type" >
                                                    <option type="hidden" value="{{$vehicleDetails->fuel_type}}">Please select</option>
                                                    <option value="Premium unleaded petrol">Premium unleaded petrol</option>
                                                    <option value="Super unleaded petrol">Super unleaded petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                    <option value="LPG Autogas">LPG Autogas</option>
                                                    <option value="Biofuels (biodiesel and bioethanol)">Biofuels (biodiesel and bioethanol)</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="transmission_type"> Transmission type <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="transmission_type" name="transmission_type" >
                                                    <option type="hidden" value="{{$vehicleDetails->transmission_type}}">Please select</option>
                                                    <option value="Manuel">Manuel</option>
                                                    <option value="Automatic">Automatic</option>
                                                    <option value="Continuous variable transmission">Continuous variable transmission</option>
                                                    <option value="Semi automatic">Semi automatic</option>
                                                    <option value="TipTronic® gearbox">TipTronic® gearbox</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Engine_Capacity" >Engine Capacity <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  id="Engine_Capacity" name="Engine_Capacity" placeholder= "Insert Engine Capacity" >
                                                <input type="hidden" value="{{$vehicleDetails->Engine_Capacity}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="Airbag">Airbag <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="Airbag" name="Airbag" >
                                                    <option type="hidden" value="{{$vehicleDetails->Airbag}}">Please select</option>
                                                    <option value="Side Airbags">Side Airbags</option>
                                                    <option value="Front Airbags">Front Airbags</option>
                                                    <option value="Knee Airbags">Knee Airbags</option>
                                                    <option value="Inflatable Seat Belt">Inflatable Seat Belt</option>
                                                    <option value=" Front Airbags & Side Airbags">Front Airbags & Side Airbags</option>
                                                    <option value="Front Airbags & Knee Airbags ">Front Airbags & Knee Airbags</option>
                                                    <option value="Front Airbags & Knee Airbags & Side Airbags"> Front Airbags & Knee Airbags & Side Airbags</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="CDPlayer">CD Player <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="CDPlayer" name="CDPlayer" placeholder="CD Player" value="{{$vehicleDetails->CDPlayer}}">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="power_steering">Power steering <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="power_steering" name="power_steering" placeholder="Insert power steering" >
                                                <input type="hidden" value="{{$vehicleDetails->power_steering}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"  for="description">Description<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea id="description" name="description"  placeholder="Enter description ..."  style="height:250px"> value="{{$vehicleDetails->description}}" </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="url">URL <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{$vehicleDetails->URL}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" value="add_vehicle" class="btn btn-primary">Edit Vehicle</button>
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
vehicle