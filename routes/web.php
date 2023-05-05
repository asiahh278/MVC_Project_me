<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\HomeController;

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


// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/adminpage', [MotorController::class, 'admin'])->name('adminpage');

// Route::get('/addmotor', [motorController::class, 'create']);
// Route::post('/insertdata', [motorController::class, 'insertdata']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/adminpage', function () {
    return view('admin');
})->middleware('auth');
// Route::get('logout', function ()
// {
//     auth()->logout();
//     Session()->flush();

//     return redirect('/')->with('success', 'Logout Successfuly');
// })->name('logout');

Route::get('/adminpage', [MotorController::class, 'index']); #main
Route::get('/addmotor', [MotorController::class, 'create']);
Route::post('/insertdata', [MotorController::class, 'insertdata']);
Route::get('/viewdata/{id}', [MotorController::class, 'viewdata']);
Route::put('/updatedata/{id}', [MotorController::class, 'updatedata']);
Route::get('/delete/{id}', [MotorController::class, 'delete']);

