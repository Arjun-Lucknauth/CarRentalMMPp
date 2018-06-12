@extends('layouts.FrontLayout.Front_design')
@section('content')

    <div id="confirmation" class="col-lg-9">
    <div class="box mt-0 pb-0 no-horizontal-padding" >
        <h1>Thank you for <br> Your Order!</h1>
        <p>A confirmation email was sent</p>
        <div class="spacer"></div>
        <div>
            <a href="{{ url('/') }}" class="button">Home Page</a>
        </div>
    </div>
    </div>


@endsection