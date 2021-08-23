<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
//    if (auth()->check() && auth()->user()->user_type !== '1')
//    {
//        return redirect()->route('dashboard');
//    }

    return view('home');
})->name('home');

//Route::get('/home-two', function () {
//    return view('home2')
//
//});

Route::get('/home-two', [App\Http\Controllers\PageController::class, 'coursePage']);


Route::get('/why1', function () {
    return view('why');
});

Route::get('/web', function () {
    return view('webinars');
});

Route::get('/contact1', function () {
    return view('contact');
});

//Route::get('/lawma1', function () {
//    return view('lawma');
//});

Route::get('/lawma1', [App\Http\Controllers\PageController::class, 'courseLawmaPage']);



Route::get('/news1', function () {
    return view('news');
});

Route::get('/commitment1', function () {
    return view('commitment');
});

Route::get('/support1', function () {
    return view('support');
});

Route::get('/business1', function () {
    return view('business');
});

Route::get('/partnership1', function () {
    return view('partnership');
});

Route::get('/Research1', function () {
    return view('Research');
});

Route::get('/donate1', function () {
    return view('donate');
});

Route::get('/Volunteer1', function () {
    return view('Volunteer');
});

Route::get('/payhere1', function () {
    return view('payhere');
});

Route::get('/book-now', function () {
    return view('booknow');
});

//user
Route::get('/new-user', function () {
    return view('newuser');
});

Route::get('/guest-login', function () {
    return view('guestlogin');
});


Route::get('/t-hankAdmin', function () {
    return view('thankAdmin');
});

Route::get('/check', function () {
    return view('booknow_new');
});

Route::get('/email', function () {
    return view('email-template');
});


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/emaildata', [App\Http\Controllers\PageController::class, 'dataCheckout']);

Route::post('/checkoutdata', [App\Http\Controllers\PageController::class, 'checkoutdata']);

//Route::get('/checkoutdetails', [App\Http\Controllers\PageController::class, 'checkoutdata']);
// Route::get('/students', [App\Http\Controllers\CreateUserStController::class, 'create']);

Route::get('/stdlogin', [App\Http\Controllers\LoginController::class, 'stlogin']);
Route::post('/stdlogin', [App\Http\Controllers\LoginController::class, 'studentLogin'])->name('studentLogin');
Route::post('/stdlogout', [App\Http\Controllers\StdRegisterController::class, 'logout']);

Route::get('/stdregister', [App\Http\Controllers\StdRegisterController::class, 'register']);
Route::post('/stdregister', [App\Http\Controllers\StdRegisterController::class, 'createStudent'])->name('stdregister');


Route::get('/students-list', [App\Http\Controllers\CreateUserStController::class, 'index']);

Route::post('/students/add',[App\Http\Controllers\CreateUserStController::class, 'store'])->name('students.store');


//Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);

//Route::get('/users', [App\Http\Controllers\AdminController::class, 'UserManagment']);
//Route::get('/courses', [App\Http\Controllers\AdminController::class, 'CourseData']);
//Route::get('/reports', [App\Http\Controllers\AdminController::class, 'AdminList']);
//Route::get('/adminlog', [App\Http\Controllers\AdminController::class, 'logAdmin']);
//
//Route::get('/thankAdmin', [App\Http\Controllers\AdminController::class, 'thAdmin']);

Route::get('/personal-development', function () {
    return view('personaldevelopment');
});

Route::get('/inspiring-student', function () {
    return view('inspiringstudent');
});

require_once __DIR__ . '/jetstream.php';

Route::middleware(['auth:sanctum', 'verified', 'student'])->group(function ()
{
    Route::get('/afterCheckout', [App\Http\Controllers\ProductController::class,'checkOut']);
    Route::get('/clearCart', [App\Http\Controllers\ProductController::class,'clearSessionCart']);
    Route::get('/enroll', [App\Http\Controllers\ProductController::class,'index']);
    Route::get('/addtocart/{id}', [App\Http\Controllers\ProductController::class,'getAddToCart']);
    Route::get('/removeProduct/{id}', [App\Http\Controllers\ProductController::class,'removeProduct']);
    Route::get('/cart', [App\Http\Controllers\ProductController::class,'getCart']);

    Route::get('/emailForm', [App\Http\Controllers\EmailController::class, 'create']);
    Route::post('/emailForm', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
//    Route::get('/payment', [App\Http\Controllers\StripeController::class, 'checkout']);
//    Route::post('/post-payment', [App\Http\Controllers\StripeController::class, 'afterPayment']);

    Route::get('checkout',[App\Http\Controllers\CheckoutController::class, 'checkout']);
    Route::post('checkout',[App\Http\Controllers\CheckoutController::class,'afterpayment'])->name('credit-card');

    Route::get('/stdEdit/{id}', [App\Http\Controllers\LoginController::class,'editStudent'])->name('edit-student');
    Route::post('/stdUpdate/{id}', [App\Http\Controllers\LoginController::class,'updateStudent']);
    Route::post('/stdUpdatePassword/{id}', [App\Http\Controllers\LoginController::class,'updateStudentPassword']);

    Route::get('/thankyou', [App\Http\Controllers\EmailController::class, 'thank']);
});


