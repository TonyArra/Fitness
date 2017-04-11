<?php

use App\Food;
use Illuminate\Http\Request;

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
    return view('welcome')
        ->with('foods', Food::all());
})->name('home');

Route::group(['prefix' => '/nutrition/diary'], function() {
    Route::post('/', function (Request $request) {
        Food::create($request->all());

        return back();
    })->name('add-food');

    Route::get('/', function () {
        $foods = Food::all();

        return response()->json(array(
            'count' => $foods->count(),
            'records' => $foods,
        ));
    })->name('read-food');
});
