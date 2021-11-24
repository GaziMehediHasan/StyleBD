<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;
use Illuminate\Support\Facades\Auth;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $men = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Men')
                ->orderBy('id','DESC')
                ->take(12)
                ->get();

        $women = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                    ->select(['*','items.Name'])
                    ->where('Cat_Type','Women')
                    ->orderBy('id','DESC')
                    ->take(12)
                    ->get();

        $kids = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                    ->select(['*','items.Name'])
                    ->where('Cat_Type','Kids')
                    ->orderBy('id','DESC')
                    ->take(12)
                    ->get();

        $item = Item::select('*')->where('Ratings','1')->paginate(8);

        $deal = Item::select('*')->orderBy('Discount','DESC')->first();
        
        $date =  $deal->updated_at->setTimezone('Asia/Dhaka');
        $EndDate = $date->addDays(2);

        if(Auth::check())
        {
            Cart::instance('cart')->restore(Auth::user()->email);
        }

        if(Auth::check())
        {
            Cart::instance('wishlist')->restore(Auth::user()->email);
        }

        return view('home', compact('men','women','kids','item','deal','EndDate'));
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) 
        {
            $item = Item::select('*')->where('Ratings','1')->paginate(8);
            return view('pagination_data', compact('item'))->render();
        }
    }
}
