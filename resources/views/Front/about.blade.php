@extends('Layouts.FrontLayout.Front_design')
@section('content')
<div id="content">
    <div class="container">
        <section class="bar">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>About US</h2>
                    </div>
                    <p class="lead">We are a team of Mechanical Gurus</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div id="headingOne" role="tab" class="card-header">
                                <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Aim</a></h4>
                            </div>
                           <p>We aims to be the leader in car hire and mobility services in Mauritius by providing an outstanding and unique customer experience with our distinct touch of Mauritian hospitality.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div id="headingTwo" role="tab" class="card-header">
                                <h4 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Strategic Outlets</a></h4>
                            </div>
                            <p> For enhanced customer convenience and proximity, Lucknauth Car Rental has outlets strategically situated all over the island and at the airport</p>
                            </div>
                        </div>
                </div>
        </section>
        <section class="bar mt-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="heading">
                        <h2>Our skills</h2>
                    </div>
                    <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                        <div role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" class="progress-bar bg-primary">Price</div>
                    </div>
                    <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                        <div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" class="progress-bar bg-primary">Customer Satisfaction</div>
                    </div>
                    <div style=" height: 20px; border-radius: 0; margin-bottom: 20px;" class="progress">
                        <div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" class="progress-bar bg-primary">Services</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                        <h2>Our services</h2>
                    </div>
                    <ul class="ul-icons list-unstyled">
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>Delivery any location on the island - Free of charge
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>Free technical assistance 24/7.
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>Cheapest on the market.
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                        <h2>Our values</h2>
                    </div>
                    <ul class="ul-icons list-unstyled">
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>A commitment to innovation and excellence.
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>A commitment to Reliability.
                        </li>
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>A commitment to Service to others.
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <section class="bar bg-gray">
        <div class="container">
            <div class="heading text-center">
                <h2>Our Clients</h2>
            </div>
            <ul class="list-unstyled owl-carousel customers no-mb">
                <li class="item"><img src="" alt="" class="img-fluid"></li>
                <li class="item"><img src="" alt="" class="img-fluid"></li>
                <li class="item"><img src="" alt="" class="img-fluid"></li>
                <li class="item"><img src="" alt="" class="img-fluid"></li>
                <li class="item"><img src="" alt="" class="img-fluid"></li>
                <li class="item"><img src="" alt="" class="img-fluid"></li>
            </ul>
        </div>
    </section>

</div>
@endsection