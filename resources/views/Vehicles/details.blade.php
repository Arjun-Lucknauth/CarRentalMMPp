
@extends('Layouts.FrontLayout.Front_design')
@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">{{$vehicleDetails->vehicle_name}}</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">{{$vehicleDetails->vehicle_name}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row bar">
            <div class="col-lg-12">
                <p class="lead"></p>
                <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll to product details, material & care and sizing</a></p>
                <div id="productMain" class="row">
                    <div class="col-sm-6">
                        <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                            <div> <img src="{{asset ('images/backend_image/vehicle/small/'.$vehicleDetails->image)}}" alt="" class="img-fluid"></div>
                            <div> <img src="{{asset ('images/backend_image/vehicle/small/'.$vehicleDetails->image)}}" alt="" class="img-fluid"></div>
                            <div> <img src="{{asset ('images/backend_image/vehicle/small/'.$vehicleDetails->image)}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <form action="{{route('reservation.store')}}" method="post">{{csrf_field()}}
                                <p class="price">RS &nbsp{{$vehicleDetails->price_per_day}}&nbsp Per day </p>
                                <p class="text-center">
                                    <input type="hidden" name="id" value="{{$vehicleDetails->id}}">
                                    <input type="hidden" name="vehicle_name" value="{{$vehicleDetails->vehicle_name}}">
                                    <input type="hidden" name="price_per_day" value="{{$vehicleDetails->price_per_day}}">
                                    <button  type="submit"  class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Rent</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="details" class="box mb-4 mt-4">
                    <p></p>
                    <h4>Product details</h4>
                    <p>{{$vehicleDetails->description}}</p>
                    <h4>Additional details</h4>
                    <ul>
                        <li>Color:{{$vehicleDetails->vehicle_color}}</li>
                        <li>Model Year:{{$vehicleDetails->model_year}}</li>
                        <li>Seating Capacity: {{$vehicleDetails->seating_capacity}}</li>
                        <li>Transmission type: {{$vehicleDetails->transmission_type}}</li>
                        <li>Engine Capacity: {{$vehicleDetails->Engine_Capacity}}</li>
                        <li>Fuel Type: {{$vehicleDetails->fuel_type}}</li>
                        <li>Airbag: {{$vehicleDetails->Airbag}}</li>
                        <li>CD Player: {{$vehicleDetails->CDPlayer}}</li>
                        <li>Power Steering: {{$vehicleDetails->power_steering}}</li>
                    </ul>
                    <blockquote class="blockquote">
                        <p class="mb-0"><em>Additional Features will be charge separately. Please Contact Us For more details</em></p>
                    </blockquote>
                </div>
                <div id="product-social" class="box social text-center mb-5 mt-5">
                    <h4 class="heading-light">share with your friends</h4>
                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="https://www.facebook.com/" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://plus.google.com/" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/?lang=en" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection