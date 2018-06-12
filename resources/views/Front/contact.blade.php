@extends('Layouts.FrontLayout.Front_design')
@section('content')
<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Contact</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{asset('./')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div id="map"></div>
    <div id="contact" class="container">
        <div class="row">
            <div class="col-lg-8">
                <section class="bar">
                    <div class="heading">
                        <h2>Glad to help you</h2>
                    </div>
                    <p class="lead">Our team is happy to reply to your queries</p>
                    <p class="text-sm">Please feel free to contact us, we will try our best to reply within 24hr.</p>
                    <div class="heading">
                        <h3>Contact form</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input id="firstname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input id="lastname" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input id="subject" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-envelope-o"></i> Send message</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="bar mb-0">
                    <h3 class="text-uppercase">Address</h3>
                    <p class="text-sm">Royal Road<br>16eme Mille<br>Forest-Side<br><strong>Mauritius</strong></p>
                    <h3 class="text-uppercase">Electronic support</h3>
                    <p class="text-muted text-sm">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                    <ul class="text-sm">
                        <li><strong><a href="mailto:">yal@aber.ac.uk</a></strong></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection