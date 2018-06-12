<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Vehicle;

class wishListController extends Controller
{

     // Remove from wishlist.
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);

        return back()->with('flash_success_message', 'Item has been removed!');
    }

    //move from wishList to Cart
    public function insertInCart($id)
    {
        $item = Cart::instance('wishlist')->get($id);
        Cart::instance('wishlist')->remove($id);
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });
        if ($duplicates->isNotEmpty()) {
            return redirect()->route('reservation.store')->with('flash_success_message', 'Vehicle is already in your Cart!');
        }
        Cart::instance('default')->add($item->id, $item->vehicle_name, 1, $item->price_per_day)->associate('App\Vehicle');
        return redirect()->route('reservation.store')->with('flash_success_message', 'Vehicle has been moved to Cart Successfully!');
    }
}
