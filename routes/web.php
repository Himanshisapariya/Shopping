<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified'
])->group(function () {
  // Route::get('/dashboard', function () {
  //     return view('dashboard');
  // })->name('dashboard');

  Route::get('/dashboard',[HomeController::class,'index']);
});


Route::get('/',[HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect']);

// Route::get('/', function () {
//     return view('welcome');
// });


// Login Routes



//Admin -Routes

Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

Route::get('admin/feedback',[AdminController::class,'adminfeedback'])->name('admin.feedback');

Route::get('admin/feedbackdelete/{id}',[AdminController::class,'feedbackdelete'])->name('feedbackdelete');


  Route::group(['prefix' => 'admin'],function(){

    //CAtegory Controller

    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');


    Route::post('category/create',[CategoryController::class,'store'])->name('category.store');

    Route::get('category/list',[CategoryController::class,'index'])->name('category.list');

    Route::get('/change/{id}',[CategoryController::class,'change'])->name('category.change');

    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('categories.delete');

    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    


//                 brand routes

Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');

Route::post('brand/create',[BrandController::class,'store'])->name('brand.store');

Route::get('brand/list',[BrandController::class,'index'])->name('brand.list');

Route::get('/change/{id}',[BrandController::class,'change'])->name('brand.change');

Route::get('/brand/delete/{id}',[brandController::class,'destroy'])->name('categories.delete');

Route::get('/brand/edit/{id}',[brandController::class,'edit'])->name('brand.edit');

Route::post('/brand/update/{id}',[brandController::class,'update'])->name('brand.update');



                   //User Routes

Route::get('users',[UserController::class,'index'])->name('user.list');

Route::get('users/delete/{id}',[UserController::class,'destroy'])->name('user.delete');


               //Product Route

Route::get('product/create',[productController::class,'create'])->name('product.create');

Route::post('product/create',[productController::class,'store'])->name('product.store');
               
Route::get('product/list',[productController::class,'index'])->name('product.list');
               
Route::get('/change/{id}',[productController::class,'change'])->name('product.change');
               
Route::get('/product/delete/{id}',[productController::class,'destroy'])->name('product.delete');
               
Route::get('/product/edit/{id}',[productController::class,'edit'])->name('product.edit');
               
Route::post('/product/update/{id}',[productController::class,'update'])->name('product.update');
               
Route::get('/order',[AdminController::class,'order'])->name('admin.order');

Route::get('/orderdetail/{id}',[AdminController::class,'orderdetail'])->name('admin.orderdetail');

Route::get('/changestatus/{id}',[AdminController::class,'changestatus'])->name('changestatus');

  });



                //home Controller
  
Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('home/dashboard',[HomeController::class,'index'])->name('dashboard');

Route::get('home/dashboard/navbar',[HomeController::class,'navbar'])->name('navbar');

Route::get('home/product/{id}',[HomeController::class,'product'])->name('home.product');

Route::get('home/brand/{id}',[HomeController::class,'showbrand'])->name('brand.product');

Route::get('home/viewdetail/{id}',[HomeController::class,'detail'])->name('home.viewdetail');

Route::get('home/cart/{id}',[HomeController::class,'cart'])->name('cart');

Route::get('home/cartshow',[HomeController::class,'cartshow'])->name('cartshow');

Route::get('home/cart/delete/{id}',[HomeController::class,'delete'])->name('cart.delete');

Route::get('home/order',[HomeController::class,'order'])->name('order');

Route::get('home/checkout',[HomeController::class,'checkout'])->name('checkout');

Route::post('home/billing',[HomeController::class,'billing'])->name('billing');

Route::get('/order',[HomeController::class,'show_order'])->name('showorder');

Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);

Route::get('home/productpage',[HomeController::class,'productpage'])->name('home.productpage');

Route::get('home/about',[HomeController::class,'about'])->name('home.about');

Route::get('home/feedback',[HomeController::class,'feedback'])->name('home.feedback');

Route::post('home/feedback',[HomeController::class,'sendfeedback'])->name('sendfeedback');

Route::get('home/contact',[HomeController::class,'contact'])->name('home.contact');

Route::post('home/contact',[HomeController::class,'contactstore'])->name('home.contactstore');

Route::get('home/wishlist/{id}',[HomeController::class,'wishlist'])->name('wishlist');

Route::get('home/emptywishlist',[HomeController::class,'emptywishlist'])->name('emptywishlist');


Route::get('home/wishlistshow',[HomeController::class,'wishlistshow'])->name('wishlistshow');

Route::get('home/wishlist/delete/{id}',[HomeController::class,'wlistdelete'])->name('wishlist.delete');

Route::get('/search',[HomeController::class,'search']);

Route::get('/faq',function(){
  return view('home.faq');
});

Route::get('/help',function(){
  return view('home.help');
});

Route::get('/support',function(){
  return view('home.support');
});