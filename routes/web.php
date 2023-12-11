<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentstatusController;
use App\Http\Controllers\NotiseController;
use App\Http\Controllers\CategoryController;



// Front-end Start
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/instructor', [HomeController::class, 'instructor'])->name('instructor');
Route::get('/notice', [HomeController::class, 'notice'])->name('notice');
Route::get('admission', [HomeController::class, 'admission'])->name('admission');
Route::get('curriculum', [HomeController::class, 'curriculum'])->name('curriculum');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/payment/system', [HomeController::class, 'paymentSystem'])->name('paymentsystem');
Route::get('/payment/from', [HomeController::class, 'paymentForm'])->name('paymentform');
Route::get('/payment/status', [HomeController::class, 'status'])->name('status');
Route::resources(['paymentstatuses' => PaymentstatusController::class]);

// Front-end  End




// Back-end Start

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //category
    Route::get('/manage/category', [CategoryController::class, 'manageCategory'])->name('manage.Category');

    // depertment
    Route::get('/add/depertment/category', [CategoryController::class, 'depertmentaddcategory'])->name('depertment.category');
    Route::post('/new/depertment/category', [CategoryController::class, 'deptsaveCategory'])->name('new.dept.category');
    Route::get('/edit/depertment/category/{id}', [CategoryController::class, 'depteditCategory'])->name('edit.dept.category');
    Route::post('/update/depertment/category', [CategoryController::class, 'deptupdateCategory'])->name('update.dept.category');
    Route::get('/delete/depertment/category/{id}', [CategoryController::class, 'deptdeleteCategory'])->name('delete.dept.category');

    // semester

    Route::get('/add/semester/category', [CategoryController::class, 'semsteraddcategory'])->name('semester.category');
    Route::post('/new/semester/category', [CategoryController::class, 'semesaveCategory'])->name('new.sem.category');
    Route::get('/delete/semester/category/{id}', [CategoryController::class, 'semedeleteCategory'])->name('delete.sem.category');

    // fees
    Route::get('/add/fees/category', [CategoryController::class, 'feesaddcategory'])->name('fees.category');
    Route::post('/new/fees/category', [CategoryController::class, 'feesaveCategory'])->name('new.fee.category');
    Route::get('/delete/fees/category/{id}', [CategoryController::class, 'feedeleteCategory'])->name('delete.fee.category');

    //admintion
    Route::get('/add/admintion/category', [CategoryController::class, 'admiaddcategory'])->name('admi.category');
    Route::post('/new/admintion/category', [CategoryController::class, 'admisaveCategory'])->name('new.admi.category');

    Route::resources(['notise' => NotiseController::class]);
    Route::get('payment/detials', [DashboardController::class, 'paymentDetials'])->name('paymentdetials');
    Route::get('/payment/print', [DashboardController::class, 'paymentPrint'])->name('paymentprint');
});
