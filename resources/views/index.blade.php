@extends('Layouts.FrontLayout.Front_design')
@section('content')
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{!! Session('flash_message_error')!!}</strong>
        </div>

    @endif
    @if(Session::has('flash_message_success'))
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{!! Session('flash_message_success')!!}</strong>
        </div>
            @endif
    <section style="background:url({{url("/images/background/balloon.jpg")}}) center center repeat; background-size: cover;" class="relative-positioned">
        <!-- Carousel Start-->
        <div class="home-carousel">
            <div class="dark-mask mask-primary"></div>
            <div class="container">
                <div class="homepage owl-carousel">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-5 text-right">
                                <p><img src="{{asset ('images/Cars/action.jpg')}}" alt="" class="ml-auto"></p>
                                <h1>Best Cars In Mauritius</h1>
                            </div>
                            <div class="col-md-7"><img src="{{asset ('images/Cars/asphalt.jpg')}}" alt="" class="img-fluid"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7 text-center"><img src="{{asset ('images/Cars/asphalt2.jpg')}}" alt="" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h2>Loads of car to choose</h2>
                                <ul class="list-unstyled">
                                    <li>From Economy Cars</li>
                                    <li>To Sports Cars</li>
                                    <li>To Luxury Cars</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7"><img src="{{asset ('images/Cars/asphalt3.jpg')}}" alt="" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h2>Ask Anybody</h2>
                                <ul class="list-unstyled">
                                    <li>Cheapest</li>
                                    <li>on the</li>
                                    <li>whole island</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-7"><img src="{{asset ('images/Cars/asphalt4.jpg')}}" alt="" class="img-fluid"></div>
                            <div class="col-md-5">
                                <h2>Browse through our category</h2>
                                <ul class="list-unstyled">
                                    <li>Click to see additional info</li>
                                    <li>Put on wishlist to get notified when price goes down</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End-->
    </section>
    <section class="bar no-mb">
        <div data-animate="fadeInUp" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2>Featured Car</h2>
                    </div>
                    <div class="row portfolio-showcase">
                        <div class="col-md-6">
                            <div class="image"><img src="{{asset ('images/Cars/sizeFront/4x4.jpg')}}" alt="" class="img-fluid"></div>
                        </div>
                        <div class="col-md-6">
                            <h3><a href="">Most Rented Car</a></h3>
                            <p class="lead"> ABOVE ALL, IT'S A BMW.</p>
                            <p>When BMW built the first X5, they didn’t just create another SUV. Instead, they invented something entirely new: the Sports Activity Vehicle®. By fusing ample space with dynamic power and sleek design, each SAV® delivers the thrills of a BMW. And along with the unique Sports Activity Coupe®, there truly is an X perfect for every adventure..</p>
                            <p class="buttons"><a href="{{asset('/Front/contact')}}" class="btn btn-template-outlined">View</a>
                        </div>
                    </div>
                    <div class="heading text-center">
                        <h3>Latest from our Garage</h3>
                    </div>

                    <div class="row portfolio text-center no-space">
                        @foreach($allVehicles as $vehicle)
                        <div class="col-md-4">
                            <div class="box-image">
                                <div class="image"><img src="{{asset ('images/backend_image/vehicle/small/'.$vehicle->image)}}" alt="" class="img-fluid">
                                    <div class="overlay d-flex align-items-center justify-content-center">
                                        <div class="content">
                                            <div class="name">
                                                <h3><a href="{{url('vehicles/details/'.$vehicle->id)}}" class="color-white">{{$vehicle->vehicle_name}}</a></h3>
                                            </div>
                                            <div class="text">
                                                <p class="buttons"><a href="{{url('vehicles/details/'.$vehicle->id)}}" class="btn btn-template-outlined-white">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination in case of a lot of vehicles-->
                    <div class="pages">
                        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                            <ul class="pagination">
                                {{ $allVehicles->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bar background-pentagon no-mb">
        <div class="container">
            <div class="row showcase text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-car"></i></div>
                        <h4><span class="h1 counter">{{ $VehicleCount }} </span><br>Cars</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users"></i></div>
                        <h4><span class="h1 counter">100</span><br>Satisfied Clients</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-money  "></i></div>
                        <h4><span class="h1 counter">320</span><br>Cars' Rented</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-facebook"></i></div>
                        <h4><span class="h1 counter">923</span><br>Likes From Social Media</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection