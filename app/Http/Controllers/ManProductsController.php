<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;

class ManProductsController extends Controller
{
    public function man_products()
    {
        $men = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Men')
                ->get();

        return view('Products.Man.man_products',compact('men'));
    }

    public function man_shirt()
    {
        $shirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Shirt']
                ])->get();
                
        return view('Products.Man.man_shirt',compact('shirt'));
    }

    public function man_pant()
    {
        $pant = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Pant']
                ])->get();
                
        return view('Products.Man.man_pant',compact('pant'));
    }

    public function man_tshirt()
    {
        $tshirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','T-Shirt']
                ])->get();
                
        return view('Products.Man.man_tshirt',compact('tshirt'));
    }

    public function man_poloShirt()
    {
        $poloshirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Polo Shirt']
                ])->get();
                
        return view('Products.Man.man_poloshirt',compact('poloshirt'));
    }

    public function man_kurta()
    {
        $kurta = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Kurta']
                ])->get();
                
        return view('Products.Man.man_kurta',compact('kurta'));
    }

    public function man_shoes()
    {
        $shoe = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Shoe']
                ])->get();
                
        return view('Products.Man.man_shoe',compact('shoe'));
    }

    public function man_sunglass()
    {
        $sunglass = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Sunglass']
                ])->get();
                
        return view('Products.Man.man_sunglass',compact('sunglass'));
    }

    public function man_bag()
    {
        $bag = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Bag']
                ])->get();
                
        return view('Products.Man.man_bag',compact('bag'));
    }

    public function man_watch()
    {
        $watch = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','Watch']
                ])->get();
                
        return view('Products.Man.man_watch',compact('watch'));
    }

    public function man_undergarment()
    {
        $undergarment = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Men'],
                        ['ItemsType','UnderGarment']
                ])->get();
                
        return view('Products.Man.man_undergarment',compact('undergarment'));
    }
}
