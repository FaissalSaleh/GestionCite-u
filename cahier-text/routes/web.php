<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function (Request $request) {
 $user = $request->session()->get('user');
 $route = 'home';   
    return view('index',compact('user','route'));
})->middleware('checkSession');

/*Route::get('/chambre', function (Request $request) {
 $user = $request->session()->get('user');  
 $route = 'chambre';    
    return view('chambres',compact('user','route'));
})->name('chambre')->middleware('checkSession');*/



Route::get('/login', function () {
    return view('login');
});


Route::get('/forgot', function () {
    return view('forgot');
}); 

Route::get('/register', function () {
    return view('register');
}); 

Route::get('/residence',[UserController::class,'residence'])->name('residence')->middleware('checkSession');
Route::get('/detail-block/{idr}',[UserController::class,'detail_block'])->name('detail-block')->middleware('checkSession');
Route::post('/add_reservation',[UserController::class,'add_reservation'])->name('add_reservation')->middleware('checkSession');

Route::get('/chambre',[UserController::class,'chambre'])->name('chambre')->middleware('checkSession');

/*detail-chambre detail-block/{{$r->id}} */

Route::post('register',[UserController::class,'store'])->name('register');
Route::post('show_block_residence',[UserController::class,'show_block_residence'])->name('show_block_residence');
Route::post('show_block_chambre',[UserController::class,'show_block_chambre'])->name('show_block_chambre');

Route::get('block',[UserController::class,'block'])->name('block')->middleware('checkSession');;
Route::get('detail_chambre/{id}',[UserController::class,'detail_chambre'])->name('detail_chambre')->middleware('checkSession');

Route::post('login',[UserController::class,'login'])->name('login');
Route::post('uploadFile',[UserController::class,'uploadFile'])->name('uploadFile');
Route::get('logout',[UserController::class,'logout'])->name('logout')->middleware('checkSession');

Route::get('reservation',[UserController::class,'reservation'])->name('reservation')->middleware('checkSession');

Route::post('select_residence_chambre',[UserController::class,'select_residence_chambre'])->name('select_residence_chambre');

Route::get('search_room/{idr}/{idb}',[UserController::class,'search_room'])->name('search_room')->middleware('checkSession');
Route::post('/select_block',[UserController::class,'selectblock'])->name('select_block')->middleware('checkSession');