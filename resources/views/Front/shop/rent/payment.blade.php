@extends('layouts.FrontLayout.Front_design')
<script src="https://js.stripe.com/v3/"></script>
@section('content')
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span>
            </button>
            <strong>{!! session('flash_message_error')!!}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span>*</span></button>
            <strong>{!! session('flash_message_success')!!}</strong>
        </div>
    @endif
    <div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">Checkout - Payment Method</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Checkout - Payment Method</li>
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
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item"><a class="nav-link disabled"> <i class="fa fa-shopping-basket"></i><br>Cart</a></li>
                                <li class="nav-item"><a class="nav-link disabled"> <i class="fa fa-map-marker"></i><br>Address</a></li>
                                <li class="nav-item"><a class="nav-link active"><i class="fa fa-money"></i><br>payment</a></li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <form action="{{route('checkout.store')}}" method="post" id="payment-form">
                                                {{csrf_field ()}}
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    @if (auth()->user())
                                                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                                    @else
                                                        <input type="email" class="form-control" id="email" name="email" value="{{('email') }}" required>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{('name') }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="{{('address') }}" required>
                                                </div>

                                                <div class="half-form">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" id="city" name="city" value="{{('city') }}" required>
                                                    </div>
                                                </div> <!-- end half-form -->

                                                <div class="half-form">
                                                    <div class="form-group">
                                                        <label for="postalcode">Postal Code</label>
                                                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{('postalcode') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" id="phone" name="phone" value="{{('phone') }}" required>
                                                    </div>
                                                </div> <!-- end half-form -->

                                                <div class="spacer"></div>

                                                <h2>Payment Details</h2>

                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>
                                                <div class="col">
                                                    <label for="name">
                                                        Name as on card
                                                    </label>
                                                    <input id="name_on_card" name="name_on_card" placeholder="e.g Jane Doe" required>
                                                </div>
                                                <div id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">
                                            <h4>Cash on delivery</h4>
                                            <p>You pay when you get it.</p>
                                            <div class="box-footer text-center">
                                                <input type="radio" name="payment" value="payment3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                                <div class="left-col"><a href="/" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to Home</a></div>
                                <div class="right-col">
	                                <button type="submit" id="complete-order" class="btn btn-template-main">Complete Order<i class="fa fa-chevron-right"></i></button>
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


