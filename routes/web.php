<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
// use App\Http\Controllers\DemoController;
// use App\Http\Controllers\Usercontroller;
// use \App\Http\Controllers\PostController;
use \App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\Collectioncontroller;
use App\Http\Controllers\RoleController;
// use App\Http\Controllers\PaypalController;


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

// Route::get('/', function () {
//     return ('master.resume') ;
// });
// Route::get('/about',[DemoController::class,'about']);
// Route::get('/experience',[DemoController::class,'experience']);
// Route::get('/education',[DemoController::class,'education']);
// Route::get('/skills',[DemoController::class,'skills']);
// Route::get('/interests',[DemoController::class,'interests']);
// Route::get('/awards',[DemoController::class,'awards']);

// Route::get('/user/{id}/group/{group}',[DemoController::class,'show']);
// Route::GET('/',function(){return redirect()->route('login');});
// Route::get('/home', [PostController::class, 'index'])->name('home')->middleware('auth','verified');
// Route::get('/post/add', [PostController::class, 'add'])->name('post.add');
// Route::POST('/post/save', [PostController::class, 'save'])->name('post.save');
// Route::get('/post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
// Route::PUT('/post/update/{post}', [PostController::class, 'update'])->name('post.update');
// Route::DELETE('/post/delete/{post}', [PostController::class, 'delete'])->name('post.delete');

// Route::VIEW('/two-factor', 'auth.two-factor-enable');
Route::resource('products', ProductController::class);
Route::get('/adminproduct', [ProductController::class, 'admin']); 
Route::get('/usermanagement',[RoleController::class, 'usermanage']);

Route::get('/', function(){
    return view ('project.Homepage');
});
Route::get('/home', function(){
    return view ('project.Homepage');
});
Route::get('/aboutus', function(){
    return view ('project.aboutus');
});
Route::get('/profile', function(){
    return view ('project.userdetail');
});
Route::get('/opt', function(){
    return view ('auth.two-factor-enable');
});

Route::get('/dash', [RoleController::class, 'userConfi']);
Route::get('/stk', function(){
    return view ('Dashboard.stock');
});
Route::get('/Fpassword',function(){
    return view ('auth.forgot-password');
});

Route::get('/login',function(){
    return view ('auth.login');
});
Route::get('/register',function(){
    return view ('auth.Register');
});
Route::get('/User',function(){
    return view ('project.userdetail');
});
Route::post('/profile/pf', [ProfileController::class,'imageStore'])
-> name('pf.store');

// Route::get('/payment', [PaypalController::class,'payment'])->name('payment');
// Route::get('/cancel', [PaypalController::class,'cancel'])->name('payment.cancel');
// Route::get('/payment/success', [PaypalController::class,'success'])->name('payment.success');



Route::get('/Sale', [Collectioncontroller::class, 'category']); 
Route::get('cart', [Collectioncontroller::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [Collectioncontroller::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [Collectioncontroller::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [Collectioncontroller::class, 'remove'])->name('remove.from.cart');







// Route::get('/register',[DemoController::class,'register']);
