@extends('Layouts.FrontLayout.Front_design')
@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">{{$categoryDetails->name}}</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$categoryDetails->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row bar">
                <div class="col-md-12">
                    <p class="text-muted lead text-center">Hope you find what you are looking for.</p>
                    <div class="products-big">
                        <div class="row products">
                            @foreach($allVehicles as $vehicle)
                            <div class="col-lg-3 col-md-4">
                                <div class="product">
                                    <div class="image"><a href="{{url('vehicles/details/'.$vehicle->id)}}"><img src="{{asset ('images/backend_image/vehicle/small/'.$vehicle->image)}}" alt="" class="img-fluid image1"></a></div>
                                    <div class="text">
                                        <h3 class="h5"><a href="{{url('vehicles/details/'.$vehicle->id)}}">{{$vehicle->vehicle_name}}</a></h3>
                                        <p class="price">RS {{$vehicle->price_per_day}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{ $allVehicles->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
