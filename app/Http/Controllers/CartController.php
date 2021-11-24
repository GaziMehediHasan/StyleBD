<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Admin\Item;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $cart = Cart::instance('cart')->content();
        return view('Cart.cart', compact('cart'));
        //return response()->json($cart);
    }

    public function AddCart($id)
    {
        $item = Item::select('*')->where('id',$id)->first();

        $data = array();
        $data['id'] = $item->id;
        $data['name'] = $item->Name;
        $data['qty'] = 1;
        $data['price'] = $item->Price-$item->Price*$item->Discount/100;
        $data['weight'] = 500;
        $data['options']['image'] = $item->Photo;

        Cart::instance('cart')->add($data);
        //return\Response::json(['success'=>'Successfully added to cart']);

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }
        
        return redirect()->back();
    }

    public function increaseQty($rowId)
    {
        $cart = Cart::instance('cart')->get($rowId);
        $qty = $cart->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        return redirect()->back();
    }

    public function decreaseQty($rowId)
    {
        $cart = Cart::instance('cart')->get($rowId);
        $qty = $cart->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        return redirect()->back();
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        return redirect()->back();
    }
}
