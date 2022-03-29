<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Models\Hotel;
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

Route::get('/', function () {
    return view('home');
});

Route::resource("hotel", HotelController::class);
Route::get('hotels',  function() {
    $hotels = Hotel::all();

    return view("hotels", [
        "hotels"=>$hotels
    ]);
});


Route::get('create',  [HotelController::class, 'create']);
Route::post('create', [HotelController::class, 'store']);

Route::get('hotels/{id}/details', function($id) {
    $hotels = Hotel::find($id);

    return view("details", [
        "hotels"=>$hotels
    ]);
});