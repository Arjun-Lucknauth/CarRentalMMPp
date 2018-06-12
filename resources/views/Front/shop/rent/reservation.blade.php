@extends('layouts.FrontLayout.Front_design')
@section('content')

<div id="heading-breadcrumbs">
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-dismissible fade show " role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span>
            </button>
            <strong>{!! Session('flash_message_error')!!}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_success'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span>*</span></button>
            <strong>{!! Session('flash_message_success')!!}</strong>
        </div>
            @endif
            @if (Cart::count()>0)
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <h1 class="h2">Rent</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                    <li class="breadcrumb-item active">Rent Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row bar">
          <ul class="nav nav-pills nav-fill">
              <li class="nav-item"><a class="nav-link active"> <i class="fa fa-shopping-basket"></i><br>Cart</a></li>
              <li class="nav-item"><a class="nav-link disabled"><i class="fa fa-truck"></i><br>Location and time</a></li>
              <li class="nav-item"><a class="nav-link disabled"><i class="fa fa-money"></i><br>Payment</a></li>
          </ul>
     <div class="col-lg-12">
         <p class="text-muted lead">Rent duration is currently {{Cart::count()}} days</p>
     </div>
     <div id="basket" class="col-lg-9">
         <div class="box mt-0 pb-0 no-horizontal-padding">
             <form method="post">
       <div class="table-responsive">
           <table class="table">
             @foreach(Cart::content() as $details)
             <thead>
             <tr>
                 <th >Vehicle selected</th>
                 <th>Name</th>
                 <th>price per day</th>
                 <th>Number of days</th>
                 <th>Delete</th>
                 <th>Add to Wishlist</th>
             </tr>
             </thead>
             <tbody>
             <tr>
                 <td><a href="{{url('vehicles/details/'.$details->id)}}"><img src="{{asset('images/backend_image/vehicle/medium/'.$details->model->image)}}" alt="{{$details->model->vehicle_name}}" class="img-fluid"></a></td>
                 <td><a href="{{url('vehicles/details/'.$details->id)}}">{{$details->model->vehicle_name}}</a></td>
                 <td>{{$details->model->price_per_day}}</td>
                 <td>
                        <select class="numberOfDays" data-id="{{ $details->rowId }}">
		                 @for ($i = 1; $i <365 + 1 ; $i++)
			                 <option {{ $details->qty === $i ? 'selected' : '' }}>{{$i }}</option>
		                 @endfor
	                 </select>
                 </td>
                 <td>
                     <form action="{{route('delete.item',$details->rowId)}}" method="POST">
                         {{csrf_field()}}
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-default">Delete <i class="fa fa-trash-o"></i></button>

                     </form>
                 </td>
                 <td>
                     <form action="{{route('reservation.wishList',$details->rowId)}}" method="POST">
                         {{csrf_field()}}
                         <button type="submit" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn btn-default">Wishlist<i class="fa fa-heart-o"></i></button>
                     </form>
                 </td>
             </tr>
             </tbody>
             @endforeach
           </table>
       </div>

       <div class="box-footer d-flex justify-content-between align-items-center">
           <div class="left-col"><a href="/" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
           <div class="right-col">
               <div class="right-col"><a href="{{route('delivery.location')}}" class="btn btn-template-outlined"><i class="fa fa-chevron-right"></i> Proceed</a></div>
                     </div>
                 </div>
             </form>
         </div>
     </div>
     @else
         <h3>No Car selected yet, go back to categories and browse through</h3>
     @endif
 <div class="col-lg-3">
     <div id="order-summary" class="box mt-0 mb-4 p-0">
         <div class="box-header mt-0">
             <h3>Order summary</h3>
         </div>
         <p class="text-muted">15% Tax rate according to law</p>
         <div class="table-responsive">
             <table class="table">
                 <tbody>
                 <tr>
                     <td>Coupon</td>
                     <th>{{session()->get('coupon')}}
                     <form action="{{route('coupon.destroy')}}" method="post">
                         {{csrf_field ()}}
                         {{method_field('delete')}}
                         <button type="submit">Remove Coupon</button>
                     </form>
                     </th>
                 </tr>
                 <tr>
                     <td>Order subtotal RS</td>
                     <th>{{Cart::subtotal()}}</th>
                 </tr>

                 <tr>
                     <td>Tax RS</td>
                     <th>{{Cart::tax()}}</th>
                 </tr>
                 <tr class="total">
                     <td>Total RS</td>
                     <th>{{Cart::total()}}</th>
                 </tr>
                 </tbody>
             </table>
         </div>
     </div>
     <div class="box box mt-0 mb-4 p-0">
         <div class="box-header mt-0">
             <h4>Coupon code</h4>
         </div>
         <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
         <form action="{{route('coupon.reservation')}}">{{csrf_field ()}}
             <div class="input-group">
                 <input type="text" name="coupon_code" id="coupon_code" class="form-control"><span class="input-group-btn">
       <button type="button" class="btn btn-template-main"><i class="fa fa-gift"></i></button></span>
             </div>
         </form>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection
