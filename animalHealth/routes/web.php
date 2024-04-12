<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();
// Pet registration
Route::get('/signup/{name}', [AnimalController::class, 'petForm'])->name('petForm');
Route::get('/pet-details', [AnimalController::class, 'details'])->name('details');
Route::post('/plan', [AnimalController::class, 'addDetails'])->name('addDetails');
Route::get('/dental', [AnimalController::class, 'addPlan'])->name('addPlan');
Route::get('/plan-summary', [AnimalController::class, 'planList'])->name('planList');
Route::get('/checkout-detail', [AnimalController::class, 'checkoutDetails'])->name('checkoutDetails');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/pet-name', [AnimalController::class, 'signUp'])->name('signUp');
    Route::post('/choose-plan', [AnimalController::class, 'addName'])->name('addName');
    Route::get('/view-plan', [AnimalController::class, 'planView'])->name('planView');
    Route::get('/pay-with', [AnimalController::class, 'readyPay'])->name('readyPay');

    // Settings
    Route::get('/setting', 'QuestionController@setting')->name('setting');
    Route::post('/add-setting', 'QuestionController@addSetting')->name('addSetting');

    // All status change
    Route::get('/status/update', 'HomeController@changeStatus')->name('status');
    Route::get('itemDelete/{model}/{id}/{tab}', 'HomeController@itemDelete')->name('itemDelete');
});

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');

    return 'Cleared!';
});
