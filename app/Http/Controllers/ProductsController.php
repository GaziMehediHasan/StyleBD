<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $men = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Men')
                ->get();

        $women = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Women')
                ->get();

        $kids = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                ->select(['*','items.Name'])
                ->where('Cat_Type','Kids')
                ->get();

        return view('Products.products',compact('men','women','kids'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'search'=> 'required|min: 3',
        ]);

        $category = $request->Category;
        $name = $request->search;
        if($category != "All Category")
        {
                $item = Item::where([
                        ['ItemsType',$category],
                        ['Name', 'like', "%$name%"]
                        ])->get();
        }else
        {
               $item = Item::where('Name', 'like', "%$name%")->get(); 
        }
        
        return view('search', compact('item'));
    }
}
