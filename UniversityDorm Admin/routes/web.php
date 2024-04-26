<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminControler;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|forgot
*/


Route::get('/reservation', function (Request $request) {
 $user = $request->session()->get('user');  
 $route = 'reservation';    
    return view('reservation',compact('user','route'));
})->name('reservation')->middleware('checkSession');

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/forgot', function () {
    return view('forgot');
}); 

Route::get('/register', function () {
    return view('register');
}); 


Route::post('register',[UserController::class,'store'])->name('register');
Route::post('login',[UserController::class,'login'])->name('login');
Route::post('uploadFile',[UserController::class,'uploadFile'])->name('uploadFile');
Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware('checkSession');

/*admin loginAdmin   */
Route::post('loginAdmin',[AdminControler::class,'login'])->name('loginAdmin');
Route::post('Annuler',[AdminControler::class,'Annuler'])->name('Annuler')->middleware('checkSession');
Route::post('valider',[AdminControler::class,'valider'])->name('valider')->middleware('checkSession');
Route::get('reservation',[AdminControler::class,'reservation'])->name('reservation')->middleware('checkSession');

Route::post('detail_user_reservation',[AdminControler::class,'detail_user_reservation'])->name('detail_user_reservation');
Route::post('detail_user_reservation2',[AdminControler::class,'detail_user_reservation2'])->name('detail_user_reservation2');

Route::post('search_user',[AdminControler::class,'search_user'])->name('search_user');

Route::post('submit_search',[AdminControler::class,'submit_search'])->name('submit_search');
Route::post('select_residence_chambre',[AdminControler::class,'select_residence_chambre'])->name('select_residence_chambre');

Route::get('/',[AdminControler::class,'index'])->middleware('checkSession');
Route::get('/chambre',[AdminControler::class,'chambre'])->name('chambre')->middleware('checkSession');

Route::get('/residence',[AdminControler::class,'residence'])->name('residence')->middleware('checkSession');
Route::post('/valider_residence',[AdminControler::class,'valider_residence'])->name('valider_residence')->middleware('checkSession');
Route::post('/select_residence',[AdminControler::class,'select_residence'])->name('select_residence')->middleware('checkSession');

Route::get('/block',[AdminControler::class,'block'])->name('block')->middleware('checkSession');
Route::post('/valider_block',[AdminControler::class,'valider_block'])->name('valider_block')->middleware('checkSession');
Route::post('/select_blocb_chambre',[AdminControler::class,'select_blocb_chambre'])->name('select_blocb_chambre')->middleware('checkSession');

Route::post('/valider_chambre',[AdminControler::class,'valider_chambre'])->name('valider_chambre')->middleware('checkSession');
Route::get('/autocomplete',[AdminControler::class,'autocomplete'])->name('autocomplete')->middleware('checkSession');

