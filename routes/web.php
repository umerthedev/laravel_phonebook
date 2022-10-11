<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',[HomeController::class,'Home']);

Route::get('/Home',[HomeController::class,'index']);
//add contact
Route::get('/add_contact',[HomeController::class,'add_contact']);
Route::post('/upload_contact',[HomeController::class,'upload_contact']);
Route::get('/show_contact',[HomeController::class,'show_contact']);
//edit contact
Route::get('/edit_con/{id}',[HomeController::class,'edit_con']);
Route::post('/update_contact/{id}',[HomeController::class,'update_contact']);
//delete contact
Route::get('/delete_con/{id}',[HomeController::class,'delete_con']);
//search contact
Route::get('/search_contact',[HomeController::class,'search_contact']);
//favorite_contacts_show
Route::get('/favorite_contacts',[HomeController::class,'favorite_contacts']);
//add favorite
Route::post('/addToFav/{id}',[HomeController::class,'addToFav']);
//remove favorite
Route::get('/remove_favorite/{id}',[HomeController::class,'remove_favorite']);
//asecending order
Route::get('/dese',[HomeController::class,'dese']);
//descending order
Route::get('/dese_or',[HomeController::class,'dese_or']);

