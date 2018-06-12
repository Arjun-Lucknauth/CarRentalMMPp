@extends('layouts.AdminLayout.Admin_Design')
@section('content')

    <div id="content">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex align-content-center">
                        <h4 class="card-title text-center ">View Vehicles</h4>
                        <h6 class="card-subtitle text-center">You can view or delete vehicles</h6>
                        <div class="table-responsive m-t-40">
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
                                    <table id="myTable" class="table table-responsive-sm table-bordered table-striped table-hover" cellspacing="0" >

                                <thead>
                                <tr>
                                    <th>vehicle_id </th>
                                    <th>category_id</th>
                                    <th>category_name</th>
                                    <th>vehicle_name</th>
                                    <th>vehicle_Brand</th>
                                    <th>vehicle_year </th>
                                    <th>vehicle_color</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vehicles as $vehicle)
                                    <tr>
                                        <td>{{$vehicle ->id}}</td>
                                        <td>{{$vehicle->category_id}}</td>
                                        <td>{{$vehicle->category_name}}</td>
                                        <td>{{$vehicle ->vehicle_name}}</td>
                                        <td>{{$vehicle->vehicle_Brand}}</td>
                                        <td>{{$vehicle ->vehicle_year}}</td>
                                        <td>{{$vehicle->vehicle_color}}</td>
                                        <td >
                                            <div class="button-listS">
                                                <a href="{{url('/Admin/edit_vehicle/'.$vehicle->id)}}" type="button" role="button" class="btn btn-primary btn-xs  btn-block m-b-10">Edit</a>
                                                <a href="{{url('/Admin/add_attributes/'.$vehicle->id)}}" type="button" role="button" class="btn btn-success btn-xs  btn-block m-b-10">Add Attributes</a>
                                             <!--   <a rel="{{ $vehicle->id }}" rel1="delete_vehicle"  <?php /* href ="{{url('/Admin/delete_vehicle/'.$vehicle->id)}}" */?> href="javascript:" type="button" role="button" class="btn btn-danger btn-xs  btn-block m-b-10 deleteVehicl">Delete</a>
                                                        Does not work for some reason, using jquery.validate.init.js to pass the function but there's something missing. Will have to figure this out later.
-->
                                                <a rel="{{$vehicle->id}}" href="{{url('Admin/delete_vehicle/'.$vehicle->id)}}" type="button" role="button" class="btn btn-danger btn-xs  btn-block m-b-10 deleteVehicl">Delete</a>
                                                <button type="button" class="btn btn-info btn-block btn-xs  m-b-10" data-toggle="modal" data-target="#Modal">More Info</button>
                                                <div class="btn-group"></div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div id="Modal" {{ $vehicle->id }} class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 style="align-content: center" class="modal-title">Additional Details</h4>
                                                    <button style="align-content: flex-end" type="button" class="close" data-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Airbag:{{$vehicle ->Airbag}}</p>
                                                    <p> CD player:{{$vehicle -> CDPlayer}}</p>
                                                    <p>Power Steering:{{$vehicle ->power_steering}}</p>
                                                    <p>Price per day:{{$vehicle->price_per_day}}</p>
                                                    <p> Seating Capacity:{{$vehicle ->seating_capacity}} </p>
                                                    <p>Transmission_type: {{$vehicle->transmission_type}} </p>
                                                    <p> Model Year:{{$vehicle ->model_year}}</p>
                                                    <p>Fuel Type:{{$vehicle->fuel_type}} </p>
                                                    <p>Engine Capacity:{{$vehicle ->Engine_Capacity}}</p>
                                                    <p>Description:{{$vehicle->description}}</p>
                                                    <p>  @if(!empty($vehicle->image))
                                                            <img src="{{ asset('/images/backend_images/vehicle/small/'.$vehicle->image) }}" style="width:50px;">
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal fade" role="dialog"  id="modal-02 {{ $vehicle->id }}">
                                        <div class="modal-dialog-centered">
                                        <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
                                        <div  id="btn-close-modal" class="close-modal-02">CLOSE</div>

                                        <div class="modal-content" >

                                        </div>
                                    </div>
                                    </div>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
    </div>
    </div>

@endsection
