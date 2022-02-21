<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
})->name('index');

Route::get('/hyperdrymist', function () {
    return view('frontend.pages.hyperdrymist');
})->name('hyperdrymist');

Route::get('/t-care', function () {
    return view('frontend.pages.tcare');
})->name('tcare');

Route::get('/nextsafe', function () {
    return view('frontend.pages.nextsafe');
})->name('nextsafe');

Route::get('/contactez-nous/{comes?}', function () {
    if(!isset($comes))
        $comes = 0;
    return view('frontend.pages.contact', compact('comes'));
})->name('contact');

Route::post('/contactez-nous', function () {
    abort(404);
});
