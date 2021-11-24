<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Item;
use Cart;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlist()
    {
        $wishlist = Cart::instance('wishlist')->content();
        return view('Cart.wishlist', compact('wishlist'));
    }

    public function AddWishlist($id)
    {
        $item = Item::select('*')->where('id',$id)->first();

        $data = array();
        $data['id'] = $item->id;
        $data['name'] = $item->Name;
        $data['qty'] = 1;
        $data['price'] = $item->Price-$item->Price*$item->Discount/100;
        $data['weight'] = 500;
        $data['options']['image'] = $item->Photo;

        Cart::instance('wishlist')->add($data);

        if(Auth::check())
        {
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        
        return redirect()->back();
    }

    public function destroy($rowId)
    {
        Cart::instance('wishlist')->remove($rowId);

        if(Auth::check())
        {
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return redirect()->back();
    }

    public function MoveWishlistToCart($rowId)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);

        $data = array();
        $data['id'] = $item->id;
        $data['name'] = $item->name;
        $data['qty'] = 1;
        $data['price'] = $item->price;
        $data['weight'] = 500;
        $data['options']['image'] = $item->options->image;

        Cart::instance('cart')->add($data);

        if(Auth::check())
        {
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return redirect()->back();
    }
}
