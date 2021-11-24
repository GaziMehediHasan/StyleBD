<?php

use Illuminate\Support\Facades\Route;
use App\Model\Admin\Item;
use App\Model\Admin\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//welcome home route
Route::get('/', 'WelcomeController@index');
Route::get('pagination', 'WelcomeController@fetch_data')->name('pagination');

Auth::routes();

//users home route
Route::get('/home', 'HomeController@index')->name('home')->middleware('user');

//admin route
Route::get('/Admin', 'AdminController@index')->name('Admin')->middleware('Admin');
Route::get('/Admin/ItemsUpload', 'AdminController@items_up')->name('ItemsUpload')->middleware('Admin');
Route::get('/Admin/CategoriesUpload', 'AdminController@categories_up')->name('CategoriesUpload')->middleware('Admin');
Route::get('/ContactUs', 'AdminController@contact')->name('contact');

//items route
Route::post('/Admin/Store/Item', 'AdminController@Store_item')->name('StoreItem');
Route::get('/delete/items/{id}', 'AdminController@delete_items');
Route::get('/edit/items/{id}', 'AdminController@edit_items');
Route::post('/update/items/{id}', 'AdminController@update_items');
Route::get('item/data', 'AdminController@fetch_item_data')->name('item_data');

//categories route
Route::post('/Admin/Store/Category', 'AdminController@Store_category')->name('StoreCategory');
Route::get('/delete/category/{id}', 'AdminController@delete_category');
Route::get('/edit/category/{id}', 'AdminController@edit_category');
Route::post('/update/category/{id}', 'AdminController@update_category');
Route::get('category/data', 'AdminController@fetch_category_data')->name('category_data');

//products route
Route::get('/Products', 'ProductsController@index')->name('Products');

//man products route
Route::get('/Products/Man', 'ManProductsController@man_products')->name('Man_Products');
Route::get('/Products/Man/Shirt', 'ManProductsController@man_shirt')->name('Man_Shirt');
Route::get('/Products/Man/Pant', 'ManProductsController@man_pant')->name('Man_Pant');
Route::get('/Products/Man/TShirt', 'ManProductsController@man_tshirt')->name('Man_TShirt');
Route::get('/Products/Man/PoloShirt', 'ManProductsController@man_poloShirt')->name('Man_PoloShirt');
Route::get('/Products/Man/Kurta', 'ManProductsController@man_kurta')->name('Man_Kurta');
Route::get('/Products/Man/Shoes', 'ManProductsController@man_shoes')->name('Man_Shoes');
Route::get('/Products/Man/Sunglass', 'ManProductsController@man_sunglass')->name('Man_Sunglass');
Route::get('/Products/Man/Bag', 'ManProductsController@man_bag')->name('Man_Bag');
Route::get('/Products/Man/Watch', 'ManProductsController@man_watch')->name('Man_Watch');
Route::get('/Products/Man/Undergarment', 'ManProductsController@man_undergarment')->name('Man_Undergarment');

//women products route
Route::get('/Products/Women', 'WomenProductsController@women_products')->name('Women_Products');
Route::get('/Products/Women/Saree', 'WomenProductsController@women_saree')->name('Women_Saree');
Route::get('/Products/Women/SalwarKameez', 'WomenProductsController@women_salwarkameez')->name('Women_SalwarKameez');
Route::get('/Products/Women/Kurti', 'WomenProductsController@women_kurti')->name('Women_Kurti');
Route::get('/Products/Women/Top', 'WomenProductsController@women_top')->name('Women_Top');
Route::get('/Products/Women/Lehenga', 'WomenProductsController@women_lehenga')->name('Women_Lehenga');
Route::get('/Products/Women/Jeans', 'WomenProductsController@women_jeans')->name('Women_Jeans');
Route::get('/Products/Women/TShirt', 'WomenProductsController@women_tshirt')->name('Women_TShirt');
Route::get('/Products/Women/Shoes', 'WomenProductsController@women_shoes')->name('Women_Shoes');
Route::get('/Products/Women/Sunglass', 'WomenProductsController@women_sunglass')->name('Women_Sunglass');
Route::get('/Products/Women/Bag', 'WomenProductsController@women_bag')->name('Women_Bag');
Route::get('/Products/Women/Watch', 'WomenProductsController@women_watch')->name('Women_Watch');
Route::get('/Products/Women/Jewellery', 'WomenProductsController@women_jewellery')->name('Women_Jewellery');
Route::get('/Products/Women/Undergarment', 'WomenProductsController@women_undergarment')->name('Women_Undergarment');

//kids products route
Route::get('/Products/Kid', 'KidsProductsController@kid_products')->name('Kid_Products');
Route::get('/Products/Kid/Shirt', 'KidsProductsController@kid_shirt')->name('Kid_Shirt');
Route::get('/Products/Kid/Pant', 'KidsProductsController@kid_pant')->name('Kid_Pant');
Route::get('/Products/Kid/TShirt', 'KidsProductsController@kid_tshirt')->name('Kid_TShirt');
Route::get('/Products/Kid/PoloShirt', 'KidsProductsController@kid_poloShirt')->name('Kid_PoloShirt');
Route::get('/Products/Kid/Kurta', 'KidsProductsController@kid_kurta')->name('Kid_Kurta');
Route::get('/Products/Kid/SalwarKameez', 'KidsProductsController@kid_salwarkameez')->name('Kid_SalwarKameez');
Route::get('/Products/Kid/Kurti', 'KidsProductsController@kid_kurti')->name('Kid_Kurti');
Route::get('/Products/Kid/Top', 'KidsProductsController@kid_top')->name('Kid_Top');
Route::get('/Products/Kid/Lehenga', 'KidsProductsController@kid_lehenga')->name('Kid_Lehenga');
Route::get('/Products/Kid/Jeans', 'KidsProductsController@kid_jeans')->name('Kid_Jeans');
Route::get('/Products/Kid/Shoes', 'KidsProductsController@kid_shoes')->name('Kid_Shoes');
Route::get('/Products/Kid/Sunglass', 'KidsProductsController@kid_sunglass')->name('Kid_Sunglass');
Route::get('/Products/Kid/Bag', 'KidsProductsController@kid_bag')->name('Kid_Bag');
Route::get('/Products/Kid/Watch', 'KidsProductsController@kid_watch')->name('Kid_Watch');
Route::get('/Products/Kid/Undergarment', 'KidsProductsController@kid_undergarment')->name('Kid_Undergarment');

//cart
Route::get('cart', 'CartController@cart')->name('cart');
Route::get('add/cart/{id}', 'CartController@AddCart')->name('add_cart')->middleware('auth');
Route::get('/increase/qty/{rowId}', 'CartController@increaseQty');
Route::get('/decrease/qty/{rowId}', 'CartController@decreaseQty');
Route::get('remove/cart/{rowId}', 'CartController@destroy')->name('remove_cart');

//wishlist
Route::get('wishlist', 'WishlistController@wishlist')->name('wishlist');
Route::get('add/wishlist/{id}', 'WishlistController@AddWishlist')->name('add_wishlist')->middleware('auth');
Route::get('remove/wishlist/{rowId}', 'WishlistController@destroy')->name('remove_wishlist');
Route::get('move/wishlist/{rowId}', 'WishlistController@MoveWishlistToCart')->name('move_wishlisttocart');

// Checkout
Route::get('/checkout', 'SslCommerzPaymentController@Checkout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');

//Search
Route::get('/Products/Search', 'ProductsController@search')->name('search');

//Abouts
Route::get('/About/us', 'AboutsController@about')->name('about');
Route::get('/privacy/policy', 'AboutsController@privacypolicy')->name('privacypolicy');
Route::get('/terms/condition', 'AboutsController@termscondition')->name('termscondition');
Route::get('/return/refund', 'AboutsController@returnrefund')->name('returnrefund');