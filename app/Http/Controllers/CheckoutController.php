<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Support\Facades\Mail;
use App\location;
use App\Vehicle;
use App\Reservation;
use \Illuminate\Http\Response;

class CheckoutController extends Controller
{

public function index(){
    return view ('Front.shop.rent.payment');
}

public function personalDetails(){
    return view('Front.shop.rent.personalDetails');
}

public function location(){
    return view('Front.shop.rent.location');
}

public function store(CheckoutRequest $request)
{
    //to return the output in cart in a metadata  so that we get enough information
    $contents = Cart::content ()->map ( function ( $details ) {
        return $details->model->id . ', ' . $details->days;
    } )->values ()->toJson ();

    try {
        $charge = Stripe::charges ()->create ( [
                'amount' => Cart::total (),
                'currency' => 'MUR' ,
                'source' => $request->stripeToken ,
                'description' => 'Order' ,
                'receipt_email' => $request->email ,
                'metadata' => [
                'contents' => $contents ,
                'quantity' => Cart::instance ( 'default' )->count () ,
                'discount' => collect ( session ()->get ( 'coupon' ) )->toJson () ,
                                                   ] ,
                                               ] );

       /* $order = $this->addToOrdersTables ( $request , null );
        Mail::send ( new OrderPlaced( $order ) );*/

        Cart::instance ( 'default' )->destroy (); //Should delete cart after checkout so that it reset cart after confirmation
        session ()->forget ( 'coupon' );

        return redirect ()->route ( 'confirmation.index' )->with ( 'flash_success_message' , 'Thank you! Your payment has been successfully accepted!' );
    }
    //This will catch error of invalid card, in case card doesn't work. View stripe docs for more info
    catch (CardErrorException $e) {
        $this->addToOrdersTables ( $request , $e->getMessage () );
        return back ()->withErrors ( 'Error! ' . $e->getMessage () );
    }
}

 /*protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
             'user_id' => auth()->user() ? auth()->user()->id : null,
             'email' => $request->email,
             'name' => $request->name,
             'address' => $request->address,
             'city' => $request->city,
             'postalcode' => $request->postalcode,
             'phone' => $request->phone,
             'name_on_card' => $request->name_on_card,
             'discount' => getNumbers()->get('discount'),
             'discount_code' => getNumbers()->get('code'),
             'subtotal' => getNumbers()->get('newSubtotal'),
             'tax' => getNumbers()->get('newTax'),
             'total' => getNumbers()->get('newTotal'),
             'error' => $error,
                               ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                 'order_id' => $order->id,
                 'vehicle_id' => $item->model->id,
                 'quantity' => $item->qty,
                                 ]);
        }

        return $order;
    }*/

}





