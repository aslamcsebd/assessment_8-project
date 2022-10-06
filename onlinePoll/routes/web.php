<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addQuestion', [App\Http\Controllers\VoteController::class, 'addQuestion'])->name('addQuestion');
Route::post('/addVote', [App\Http\Controllers\VoteController::class, 'addVote'])->name('addVote');

Route::get('itemDelete/{model}/{id}/{tab}', [App\Http\Controllers\HomeController::class, 'itemDelete'])->name('itemDelete');
      
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear'); 
    return "<h1> Cleared!</h1>";
 });
