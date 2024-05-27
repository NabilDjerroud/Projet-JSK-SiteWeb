<?php

use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/locale', function (Request $request) {
    // $lang = $query["lang"] || "en"; 
    //ou
    // $lang = $query["lang"] ? $query["lang"] : "en";
    //ou
    $query = $request->query();
    if (isset($query["lang"])){
        $lang = $query["lang"];
    }else {
        $lang = "en";
    }
    session()->put("locale", $lang);
    return back();
})->name("locale");


Route::get('/', function (Request $request) {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/equipe', function () {
    return view('equipe');
})->name("equipe");

Route::get('/joueur', function () {
    return view('joueur');
})->name("joueur");

Route::get('/palmares', function () {
    return view('palmares');
})->name("palmares");



Route::resource("/joueur", JoueurController::class);

