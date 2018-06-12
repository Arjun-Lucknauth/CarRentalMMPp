<?php

namespace App\Http\Controllers;
use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservation(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();
    
        if (!$coupon) {
            return back()->with('flash_message_error','Invalid coupon');
        }
    
        return back()->with('flash_message_success','Coupon applied!');
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
    
        return back()->with('flash_message_success', 'Coupon has been removed.');
    }
}
