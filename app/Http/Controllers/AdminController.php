<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Item;
use App\Model\Admin\Category;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::paginate(5);

        $item = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                    ->select(['*','items.Name'])->paginate(10);

        return view('Admin.Admin_Home',compact('category','item'));
    }

    public function items_up()
    {
        return view('Admin.items_upload');
    }

    public function categories_up()
    {
        return view('Admin.categories_upload');
    }

     public function contact()
    {
        return view('contact');
    }

    public function Store_item(Request $request)
    {
        $request->validate([
            'Name'=> 'required|max: 255',
            'ItemsType'=> 'required',
            'Price'=> 'required|integer',
            'Discount'=> 'integer',
            'Ratings'=> 'integer',
            'CategoryType'=> 'required',
            'Photo'=> 'required',
        ]);

        $CategoryType = $request->input('CategoryType');
        $ItemsType = $request->input('ItemsType');

        $data = Category::select("Cat_ID")->where([["Cat_Type",'=',$CategoryType] , ["Name",'=',$ItemsType]])->first();

        $item = new Item;
        $item->Name = $request->input('Name');
        $item->ItemsType = $ItemsType;
        $item->Price = $request->input('Price');
        $item->Discount = $request->input('Discount');
        $item->Ratings = $request->input('Ratings');
        $item->Cat_ID = $data->Cat_ID;
        if($request->hasfile('Photo')){
            $file = $request->file('Photo');
            $exn = $file->getClientOriginalExtension();
            $filename = time().'.'.$exn;
            $path = 'public/uploads/Photo/';
            $url = $path.$filename;
            $file-> move($path,$filename);
            $item->Photo = $url;
        }
        $item->save();
        $notification = array(
            'message'=>'Item inseated successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function delete_items($id)
    {
        $item = Item::find($id);
        $photo = $item->Photo;
        unlink($photo);
        $item->delete();

        return redirect()->back();
    }

    public function edit_items($id)
    {
        $item = Item::find($id);
        $data = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                    ->where("items.id","$id")
                    ->first('*');           
        return view('Admin.edit_items', compact('item','data'));
    }

    public function update_items(Request $request, $id)
    {
        $item = Item::find($id);

        $CategoryType = $request->input('CategoryType');
        $ItemsType = $request->input('ItemsType');
        $oldphoto = $request->old_photo;

        $data = Category::select("Cat_ID")->where([["Cat_Type",'=',$CategoryType] , ["Name",'=',$ItemsType]])->first();

        $item->Name = $request->input('Name');
        $item->ItemsType = $ItemsType;
        $item->Price = $request->input('Price');
        $item->Discount = $request->input('Discount');
        $item->Ratings = $request->input('Ratings');
        $item->Cat_ID = $data->Cat_ID;
        if($request->hasfile('Photo')){
            unlink($oldphoto);
            $file = $request->file('Photo');
            $exn = $file->getClientOriginalExtension();
            $filename = time().'.'.$exn;
            $path = 'public/uploads/Photo/';
            $url = $path.$filename;
            $file-> move($path,$filename);
            $item->Photo = $url;

            $item->update();
            $notification = array(
                'message'=>'Item inseated successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('Admin')->with($notification);
        }   
        else{
            $item->update();
            $notification = array(
                'message'=>'Category updated successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('Admin')->with($notification);
        }
    }

    public function fetch_item_data(Request $request)
    {
        if ($request->ajax()) 
        {
            $item = Item::join('categories', 'categories.Cat_ID', '=', 'items.Cat_ID')
                    ->select(['*','items.Name'])->paginate(10, ['*'], 'page');

            return view('Admin.item_data', compact('item'))->render();
        }
    }

    public function Store_category(Request $request)
    {
        $request->validate([
            'Name'=> 'required|max: 55',
            'CategoryType'=> 'required',
            'Cat_ID'=> 'required|integer|unique:categories',
            'Logo'=> 'required',
        ]);

        $category = new Category;
        $category->Name = $request->input('Name');
        $category->Cat_Type = $request->input('CategoryType');
        $category->Cat_ID = $request->input('Cat_ID');
        if($request->hasfile('Logo')){
            $file = $request->file('Logo');
            $exn = $file->getClientOriginalExtension();
            $filename = time().'.'.$exn;
            $path = 'public/uploads/Logo/';
            $url = $path.$filename;
            $file-> move($path,$filename);
            $category->Logo = $url;
        }
        $category->save();
        $notification = array(
            'message'=>'Item inseated successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);

    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $logo = $category->Logo;
        unlink($logo);
        $category->delete();

        return redirect()->back();
    }

    public function edit_category($id)
    {
        $category = Category::find($id);
        return view('Admin.edit_category', compact('category'));
    }

    public function update_category(Request $request, $id)
    {
        $category = Category::find($id);

        $oldlogo = $request->old_logo;
        $category->Name = $request->input('Name');
        $category->Cat_Type = $request->input('CategoryType');
        $category->Cat_ID = $request->input('Cat_ID');

        if($request->hasfile('Logo')){
            unlink($oldlogo);
            $file = $request->file('Logo');
            $exn = $file->getClientOriginalExtension();
            $filename = time().'.'.$exn;
            $path = 'public/uploads/Logo/';
            $url = $path.$filename;
            $file-> move($path,$filename);
            $category->Logo = $url;

            $category->update();
            $notification = array(
                'message'=>'Category updated successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('Admin')->with($notification);
        }
        else{
            $category->update();
            $notification = array(
                'message'=>'Category updated successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('Admin')->with($notification);
        }
    }

    public function fetch_category_data(Request $request)
    {
        if ($request->ajax()) 
        {
            $category = Category::paginate(5,['*'],'pages');

            return view('Admin.category_data', compact('category'))->render();
        }
    }
}
