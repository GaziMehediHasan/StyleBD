<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;

class WomenProductsController extends Controller
{
    public function women_products()
    {
        $women = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Women')
                ->get();

        return view('Products.Women.women_products',compact('women'));
    }

    public function women_saree()
    {
        $saree = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Saree']
                ])->get();
                
        return view('Products.Women.women_saree',compact('saree'));
    }

    public function women_salwarkameez()
    {
        $salwarkameez = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                        ->select(['*','items.Name'])
                        ->where([
                                ['Cat_Type','Women'],
                                ['ItemsType','Salwar Kameez']
                        ])->get();
                
        return view('Products.Women.women_salwarkameez',compact('salwarkameez'));
    }

    public function women_kurti()
    {
        $kurti = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Kurti']
                ])->get();
                
        return view('Products.Women.women_kurti',compact('kurti'));
    }

    public function women_top()
    {
        $top = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Top']
                ])->get();
                
        return view('Products.Women.women_top',compact('top'));
    }

    public function women_lehenga()
    {
        $lehenga = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Lehenga']
                ])->get();
                
        return view('Products.Women.women_lehenga',compact('lehenga'));
    }

    public function women_jeans()
    {
        $jeans = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Jeans']
                ])->get();
                
        return view('Products.Women.women_jeans',compact('jeans'));
    }

    public function women_tshirt()
    {
        $tshirt = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','T-Shirt']
                ])->get();
                
        return view('Products.Women.women_tshirt',compact('tshirt'));
    }

    public function women_shoes()
    {
        $shoe = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Shoe']
                ])->get();
                
        return view('Products.Women.women_shoe',compact('shoe'));
    }

    public function women_sunglass()
    {
        $sunglass = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Sunglass']
                ])->get();
                
        return view('Products.Women.women_sunglass',compact('sunglass'));
    }

    public function women_bag()
    {
        $bag = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Bag']
                ])->get();
                
        return view('Products.Women.women_bag',compact('bag'));
    }

    public function women_watch()
    {
        $watch = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Watch']
                ])->get();
                
        return view('Products.Women.women_watch',compact('watch'));
    }

    public function women_jewellery()
    {
        $jewellery = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','Jewellary']
                ])->get();
                
        return view('Products.Women.women_jewellery',compact('jewellery'));
    }

    public function Women_undergarment()
    {
        $undergarment = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where([
                        ['Cat_Type','Women'],
                        ['ItemsType','UnderGarment']
                ])->get();
                
        return view('Products.Women.women_undergarment',compact('undergarment'));
    }
}
