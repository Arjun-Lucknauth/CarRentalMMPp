<?php

namespace App\Http\Controllers;

use App\reservationDate;
use Illuminate\Http\Request;

class reservationDateController extends Controller
{
    public function bookingDate(Request $request){
        if ($request->isMethod('post')){
            $data =$request->all();
            $newPrice =new reservationDate();
            $newPrice->book_from =$data['book_from'];
            $newPrice->book_to = $data['book_to'];
            $newPrice->pickupLocation =$data['pickupLocation'];
            $newPrice->returnLocation = $data['returnLocation'];
            $newPrice->save();
        }
    }

    public function dateDiff($book_from,$book_to)
    {
        $startDate=reservationDate::get( $book_from);
        $endDate=reservationDate::get( $book_to);
        $diff = $endDate->diff($startDate)->format("%a");
       // $diff =date_diff($startDate, $endDate);
        //return $diff; //->days;
        return view('Front.shop.rent.location')->with ( compact ( 'diff'));
    }

    public function dateDifference($id=null ){
        $startDate=DB::table('reservation_date')->where(['id'=>$id])->pluck ('book_from');
        $endDate=DB::table('reservation_date')->where(['id'=>$id])->pluck ('book_to');
        $diff=date_diff($startDate, $endDate);
        return $diff;
    }
}
