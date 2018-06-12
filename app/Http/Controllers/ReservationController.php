<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\location;
use Cart;
use App\Vehicle;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Response;

class ReservationController extends Controller
{
    public function confirmation(){
        return view ('Front.shop.rent.confirmation');
    }

    public function location(Request $request)
    {
        if ( $request->isMethod ( 'post' ) ) {
            $data = $request->all ();
            $pickupLocation = Location::where ( 'name' ,'address', $data[ "pickupLocation" ] )->first ();
            $returnLocation = Location::where ( 'name' ,'address', $data[ "returnLocation" ] )->first ();
            return view ( 'Front.shop.rent.location' )->with ( compact ( 'pickupLocation' , 'returnLocation' ) );
        }
    }

    public function payment(){
        return view ('Front.shop.rent.payment');
    }

    public function personalDetails(){
        return view ('Front.shop.rent.personalDetails');
    }

  /*  public function reservation(Request $request)
    {
        if ( $request->isMethod ( 'post' ) ) {
            $data = $request->all ();
            $reservation = new Reservation();
            $reservation->user_id = $data[ 'user_id' ];
            $reservation->vehicle_id = $data[ 'vehicle_id' ];
            $reservation->pickupLocation = $data[ 'pickupLocation' ];
            $reservation->returnLocation = $data[ 'returnLocation' ];
            $reservation->book_from = $data[ 'book_from' ];
            $reservation->book_to = $data[ 'book_to' ];
            $reservation->phone = $data[ 'phone' ];
            $reservation->save ();
         }
         return view ( 'Front.shop.rent.reservation' );
    }*/

  
    public function shop(){
        return view('Front.shop.rent.reservation');
    }

    public function store(Request $request){

        //check if item already exist in cart
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id===$request->id;
        });
        if($duplicates->isNotEmpty()){
            return redirect ()->route ( 'reservation')->with ( 'flash_message_success','Vehicle already exist in cart');
        }
        //end function to check if item already exist in cart

        Cart::add($request->id,$request->vehicle_name,1,$request->price_per_day)->associate('App\Vehicle');
        return redirect ()->route('reservation')->with('flash_message_success','Vehicle added successfully');
    }

    public function destroy($id){
        Cart::remove( $id );
        return redirect()->route('reservation')->with('flash_message_success','Vehicle has been removed from cart Successfully');
    }

    public function viewReservation ()
    {
        $reservation = reservation::get ();
        $reservation = json_decode ( json_encode ( $reservation ) );
        return view ( 'Admin.commerce' )->with ( compact ( 'reservation' ) );
    }

    //issue with wishlist, it's not calling variables from database for some reasons. To investigate...
    public function wishList(Request $request, $id)
    {
            $details = Cart::get( $id );

            Cart::remove ( $id ); //from cart it should be removed and sent to wishList
            $duplicates = Cart::instance ('wishList')->search(function($cartItem ,$rowId )use( $id ) {
                return $rowId === $id;
            } );
            if ($duplicates->isNotEmpty()) {
                return redirect ()->route ( 'reservation.store' )->with ( 'flash_success_message' , 'vehicle is already Saved in Wishlist!');
            } //check if there's duplicate and will warn user that it already exist in wishlist

            Cart::instance('reservation.add.wishList')->add ( $details ->id ,$details ->vehicle_name ,1 ,$details ->price_per_day)->associate('App\Vehicle');
            return redirect ()->route ( 'Front.UsersAccount.wishList' )->with ( 'flash_message_success' , 'Vehicle has been added to wishlist successfully' );
        }
    
    public function update(Request $request, $id)
    {
        
        Cart::update($id, $request->numberOfDays);
        session()->flash('flash_message_success', 'Rent days has been updated successfully!');
        return response()->json(['success' => true]);
    }

}




