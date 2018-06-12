@extends('Layouts.FrontLayout.Front_design')
@section('content')
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">My Wishlist</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">My Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            @foreach (Cart::instance('wishlist')->content() as $details)
            <div class="row bar">
                <div class="col-lg-9">
                    <p class="lead">You can save vehicles that you like for later</p>
                    <div class="row products">
                        <div class="col-lg-3 col-md-4">
                            <div class="product">
                                <div class="image"><a href="{{url('vehicles/details/'.$details->id)}}"><img src="{{asset('images/backend_image/vehicle/medium/'.$details->model->image)}}" alt="" class="img-fluid image1"></a></div>
                                <div class="text">
                                    <h3 class="h5"><a href="{{url('vehicles/details/'.$details->id)}}">{{$details->model->vehicle_name}}</a></h3>
                                    <p class="price">{{$details->model->price_per_day}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <!-- CUSTOMER MENU -->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="h4 panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills flex-column text-sm">
                                <li class="nav-item"><a href="{{url ('/Front/rent')}}" class="nav-link active"><i class="fa fa-list"></i>Rent History</a></li>
                                <li class="nav-item"><a href="{{url('/Front/UsersAccount/wishlist')}}" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a></li>
                                <li class="nav-item"><a href="{{url('/Front/UsersAccount/account')}}" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                                <li class="nav-item"><a href="{{url('/logout')}}" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection