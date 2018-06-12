@extends('layouts.FrontLayout.Front_design')
@section('content')

    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Checkout - Location for drop-out</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Checkout - Location for drop-out</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                <div id="checkout" class="col-lg-9">
                    <div class="box">
                        <form method="post" action="{{url('/Front/shop/rent/location') }}">
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-shopping-basket"></i><br>Cart</a></li>
                                <li class="nav-item"><a  class="nav-link active"><i class="fa fa-truck"></i><br>Location and time</a></li>
                                <li class="nav-item"><a  class="nav-link dsiabled"><i class="fa fa-money"></i><br>Payment</a></li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <form action="" method="post">
                                                <div class="form-body">
                                                    <h3 class="box-title m-t-40">pick up and drop out Address</h3>
                                                    <hr>
                                                    <!--/row-->
                                                    <div class="col-md-offset-4">
                                                        <div class="form-group flex-wrap">
                                                            <label>Pick-up Location</label>
                                                            <select id="pickupLocation" class="form-control custom-select">
                                                                <option>Drop-out location</option>
                                                                <option>Airport</option>
                                                                <option>Curepipe</option>
                                                                <option>Flacq</option>
                                                                <option>Flic en flac</option>
                                                                <option>Port-Louis</option>
                                                            </select>
                                                                 <label for="cdate" class="col-sm-offset-3 ">Date
                                                                  <input id="book_from" name="date" type="text" data-language="en" class="datepicker-here">
                                                                 </label>
                                                                <label for="time" class="col-sm-offset-3">Time
                                                                     <input id="timeBooked" name="clienttime" type="text" class="timepicker">
                                                                 </label>
                                                        </div>
                                                        <div class="float-md-auto">
                                                            <div class="form-group flex-wrap">
                                                                <div class="box shipping-method">
                                                                <label>Drop-out location</label>
                                                                <select id="returnLocation" class="form-control custom-select">
                                                                    <option>Drop-out location</option>
                                                                    <option>Airport</option>
                                                                    <option>Curepipe</option>
                                                                    <option>Flacq</option>
                                                                    <option>Flic en flac</option>
                                                                    <option>Port-Louis</option>
                                                                </select>
                                                                <label for="cdate" class="col-sm">Date
                                                                    <input id="book_to" name="date" type="text" data-language="en"  class="datepicker-here">
                                                                </label>
                                                                    <label for="time" class="col-sm ">Time
                                                                    <input id="timereturn" name="time" type="text" class="timepicker">
                                                                  </label>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                                <div class="left-col"><a href="/" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Home</a></div>
                                <div class="right-col">
                                    <div class="right-col"><a href="{{route('checkout.index')}}" class="btn btn-template-outlined"><i class="fa fa-chevron-right"></i> Payment</a></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div id="order-summary" class="box mb-4 p-0">
                        <div class="box-header mt-0">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted text-small">15% Tax rate according to law</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                <tr>
                                    <td>Number of days</td>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>Order subtotal</td>
                                    <th>{{Cart::subtotal()}}</th>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <th>{{Cart::tax()}}</th>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <th>{{Cart::total()}}</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection