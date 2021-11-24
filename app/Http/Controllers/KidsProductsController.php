<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;

class KidsProductsController extends Controller
{
    public function kid_products()
    {
        $kids = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Kids')
                ->get();

        return view('Products.Kid.kids_products',compact('kids'));
    }

     public function kid_shirt()
    {
        $shirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Shirt']
                ])->get();
                
        return view('Products.Kid.kids_shirt',compact('shirt'));
    }

    public function kid_pant()
    {
        $pant = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Pant']
                ])->get();
                
        return view('Products.Kid.kids_pant',compact('pant'));
    }

    public function kid_tshirt()
    {
        $tshirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','T-Shirt']
                ])->get();
                
        return view('Products.Kid.kids_tshirt',compact('tshirt'));
    }

    public function kid_poloShirt()
    {
        $poloshirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Polo Shirt']
                ])->get();
                
        return view('Products.Kid.kids_poloshirt',compact('poloshirt'));
    }

    public function kid_kurta()
    {
        $kurta = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Kurta']
                ])->get();
                
        return view('Products.Kid.kids_kurta',compact('kurta'));
    }

    public function kid_salwarkameez()
    {
        $salwarkameez = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                        ->select(['*','items.Name'])
                        ->where([
                                ['Cat_Type','Kids'],
                                ['ItemsType','Salwar Kameez']
                        ])->get();
                
        return view('Products.Kid.kids_salwarkameez',compact('salwarkameez'));
    }

    public function kid_kurti()
    {
        $kurti = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Kurti']
                ])->get();
                
        return view('Products.Kid.kids_kurti',compact('kurti'));
    }

    public function kid_top()
    {
        $top = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Top']
                ])->get();
                
        return view('Products.Kid.kids_top',compact('top'));
    }

    public function kid_lehenga()
    {
        $lehenga = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Lehenga']
                ])->get();
                
        return view('Products.Kid.kids_lehenga',compact('lehenga'));
    }

    public function kid_jeans()
    {
        $jeans = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Jeans']
                ])->get();
                
        return view('Products.Kid.kids_jeans',compact('jeans'));
    }

    public function kid_shoes()
    {
        $shoe = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Shoe']
                ])->get();
                
        return view('Products.Kid.kids_shoe',compact('shoe'));
    }

    public function kid_sunglass()
    {
        $sunglass = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Sunglass']
                ])->get();
                
        return view('Products.Kid.kids_sunglass',compact('sunglass'));
    }

    public function kid_bag()
    {
        $bag = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Bag']
                ])->get();
                
        return view('Products.Kid.kids_bag',compact('bag'));
    }

    public function kid_watch()
    {
        $watch = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','Watch']
                ])->get();
                
        return view('Products.Kid.kids_watch',compact('watch'));
    }

    public function kid_undergarment()
    {
        $undergarment = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Kids'],
                        ['ItemsType','UnderGarment']
                ])->get();
                
        return view('Products.Kid.kids_undergarment',compact('undergarment'));
    }
}