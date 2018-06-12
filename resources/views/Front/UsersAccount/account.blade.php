@extends('Layouts.FrontLayout.Front_design')
@section('content')
<div id="heading-breadcrumbs">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
                <div class="col-md-7">
                    <h1 class="h2">My Account</h1>
                </div>
                <div class="col-md-5">
                    <ul class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
<div id="content">
    <div class="container">
        <div class="row bar">
            <div id="customer-account" class="col-lg-9 clearfix">
                <p class="lead">Change your password here.</p>
                <div class="box mt-5">
                    <div class="heading">
                        <h3 class="text-uppercase">Change password</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_old">Old password</label>
                                    <input id="password_old" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_1">New password</label>
                                    <input id="password_1" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_2">Retype new password</label>
                                    <input id="password_2" type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-save"></i> Save new password</button>
                        </div>
                    </form>
                </div>
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