<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductCOntroller;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SafetyTipController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\SosController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/header', function () {
    return view('header');
});

Route::get('/contact-us', function() {
    return view('Frontend.contact');
});

Route::get('/products', function() {
    return view('Frontend.product');
})->name('productsPage');

//Route Group with prefix
Route::prefix('admin')->group(function(){
    Route::get('/adminDashboard',function(){
        return view('Admin.dashboard');
    })->name('adminPage');

    Route::get('/usersDashboard',function(){
        return view('Admin.users');
    });
    
}); 


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//ROuting with controller
Route::get('/user/index', [FrontendController::class,'indexPage']);
Route::get('/features', [FrontendController::class,'featurespage']);
Route::get('/tips', [FrontendController::class,'tipspage']);
Route::get('/impact', [FrontendController::class, 'impactPage']);
Route::get('/contact', [FrontendController::class, 'contactPage']);
Route::get('/features', [FrontendController::class,'featurespage']);
Route::get('/adminDashbard', [FrontendController::class,'AdminPage']);
Route::get('/UserDashbard', [FrontendController::class,'UserPage']);
Route::get('/family/dashboard', [FrontendController::class,'FamilyDashbord']);
Route::get('/police/dashboard', [FrontendController::class,'PoliceDashbord']);


Route::get('/register', [AuthController::class,'register']);

// adminController

Route::get('/index', [AdminController::class,'indexpage']);
Route::get('/footer', [AdminController::class,'footer']);
Route::get('/billing', [AdminController::class,'billingpage']);
Route::get('/safetytiptable', [AdminController::class,'safetytiptable']);
Route::get('/safetytip', [AdminController::class,'safetytip']);
Route::get('/profile', [AdminController::class,'profilepage']);
Route::get('/rtl', [AdminController::class,'rtlpage']);
Route::get('/sign-up', [AdminController::class,'sign_uppage']);
Route::get('/sign-in', [AdminController::class,'sign_inpage']);
Route::get('/tables', [AdminController::class,'tablespage']);
Route::get('/virtual-reality', [AdminController::class,'virtual-realitypage']);


// Add Safety Tip form
Route::view('/add_safetytip', 'add_safetytip');

// CRUD Routes
Route::post('/safetytip/add', [SafetyTipController::class, 'add']);
Route::get('/stips', [SafetyTipController::class, 'fetchcards']);  // cards view
Route::get('/stips/table', [SafetyTipController::class, 'fetchtable']); // table view
// Safety Tips CRUD
Route::get('/safetytip/edit/{id}', [SafetyTipController::class, 'search']);
Route::post('/safetytip/update/{id}', [SafetyTipController::class, 'edit']);
Route::get('/safetytip/delete/{id}', [SafetyTipController::class, 'delete']);

require __DIR__.'/auth.php';  


//Authentication routes
route::get('/admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
route::get('/police/dashboard',[HomeController::class,'policeDashbaord']);
route::get('/family/dashboard',[HomeController::class,'familyDashbaord']);


Route::get('/client', [FrontendController::class,'customerDashboard']);
Route::get('/men', [FrontendController::class,'mensPage']);
// Add to cart route
Route::post('/add-to-cart/{book}', [CartController::class,'addTocart'])->middleware(['auth']);

Route::get('/cart',[CartController::class,'viewCart'])->middleware(['auth']);

Route::put('/cart/update/{id}',[CartController::class,'updateQuantity'])->name('cart.update')->middleware(['auth']);

Route::delete('/cart/remove/{id}',[CartController::class,'removeFormCart'])->name('cart.remove')->middleware(['auth']);


// sending email



Route::get('/test-email', function () {
    Mail::raw('This is a test email with location link: http://example.com/location', function ($message) {
        $message->to('muhammadhasanali021@gmail.com')  // tumhari email
                ->subject('SOS Test Email');
    });

    return 'Test Email Sent!';
});




Route::get('/test-sos', function () {
    return view('test-sos');
})->middleware('auth');   // sirf logged in user hi form dekh sake

Route::post('/sos/trigger', [SosController::class, 'triggerSOS'])->middleware('auth');