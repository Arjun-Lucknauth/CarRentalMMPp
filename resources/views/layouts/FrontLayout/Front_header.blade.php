<?php
use App\Http\Controllers\Controller;
$mainCategories = Controller::mainCategories();
?>

<div id="all">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-md-block d-none">
                    <p>Contact us on +55555555 or yal@aber.ac.com.</p>
                </div>
                <div class="col-md-6">
                    <ul class="d-flex justify-content-md-end justify-content-between">
                        <ul class="list-inline contact-info d-block d-md-none">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="login"><a href="{{url('/auth/login') }}" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span>
	                        </a> <a href="{{ url('/Front/register') }}"class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span>
                          </a><a href="{{route('reservation')}}"class="fa-shopping-basket-btn"><i class="fa fa-shopping-cart"></i><span class="d-none d-md-inline-block"></span>{{Cart::count()}} </a>
                        </div>
                        <ul class="social-custom list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/arjun.lucknauth"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://plus.google.com/u/0/116790316112608524521"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href=" https://instagram.com/nephian__"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="yal@aber.ac.uk"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    <div id="login" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="login-modalLabel" class="modal-title">Members Login</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/auth/login')}}" method="post">{{ csrf_field() }}
                        <div class="form-group">
                            <input id="email" name="email" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" placeholder="password" class="form-control">
                        </div>
                        <p class="text-center">
                            <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="{{ url('/Front/register') }}"><strong>Register now</strong></a>! It is easy and done in 1 minute</p>
                </div>
            </div>
        </div>
    </div>
    <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
            <div class="container"><a href="/" class="navbar-brand home"><img src="{{asset ('images/logo/page logo sizes/124.png')}}" alt="Lucknauth" class="d-none d-md-inline-block"><span class="sr-only">Roll to homepage</span></a>
                <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
                <div id="navigation" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="{{asset('./')}}" class="nav-link">Home</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-6"><img src="{{asset ('images/background/Collage.jpg')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>Categories</h5>

                                            <ul class="list-unstyled mb-3">
                                                @foreach($mainCategories as $cat)
                                                <li class="nav-item"><a href="{{asset('/vehicles/'.$cat->url)}}" class="nav-link">{{$cat->name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>Deals</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="" class="nav-link">Promotional advertising</a></li>
                                                <li class="nav-item"><a href="" class="nav-link">Partners</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">About us<b class="caret"></b></a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-6"><img src="{{asset('images/logo/logomakersTrial300.png')}}" alt="" class="img-fluid d-none d-lg-block"></div>
                                        <div class="col-lg-3 col-md-6">
                                            <h5>About</h5>
                                            <ul class="list-unstyled mb-3">
                                                <li class="nav-item"><a href="{{asset('/Front/about')}}" class="nav-link">About us</a></li>
                                                <li class="nav-item"><a href="{{asset('/Front/services')}}" class="nav-link">Services</a></li>
                                            </ul>
                                            <h5>Marketing</h5>
                                            <ul class="list-unstyled">
                                                <li class="nav-item"><a href="#" class="nav-link">Strategies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact US <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="{{asset('/Front/contact')}}" class="nav-link">Contact</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="search" class="collapse clearfix">
                    <form role="search" class="navbar-form">
                        <div class="input-group">
                            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
