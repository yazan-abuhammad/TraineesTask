<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signup;




use App\Http\Controllers\UsersController;
use App\Http\Controllers\logIn_controller;



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

Route::get('/', function () {
    return view('welcome');
});



// Route::get('admin', [LoginAdmin::class, 'index']);
// Route::post('logadmin', [LoginAdmin::class, 'check']);


// // Route::get('/AdminUser', function () {
// //     return view('admin.Users');
// // });



// Route::get('AdminAccount', [UsersController::class, 'userAdmin'])->middleware('admin');




// Route::get('AdminIndex', [ReservatioController::class, 'total'])->middleware('admin');
// //Route::get('AdminIndex', [ReservatioController::class, 'total'] )->middleware('admin');












// Route::get('/AdminAdd_users', function () {
//     return view('admin.Add_users');
// })->middleware('admin');

// Route::get('AdminUser', [UsersController::class, 'index'])->middleware('admin');
// Route::post('adduse', [UsersController::class, 'createA'])->middleware('admin');
// Route::get('deleteusr/id/{id}', [UsersController::class, 'destroy'])->middleware('admin');
// Route::get('updateusr/id/{id}/status/{status}', [UsersController::class, 'editA'])->middleware('admin');
// Route::get('logoutAdmin', [UsersController::class, 'logoutAdmin']);

// //end admin routes








//sign up toutes
Route::get('/signup', [signup::class, 'index'])->name('signup');
Route::post('/store', [signup::class, 'store'])->name('store');
//end sigup
//log in routes
Route::get('/login', [logIn_controller::class, 'index'])->name('login');
Route::post('/login', [logIn_controller::class, 'check'])->name('check');
//end login
//logout
Route::get('/logout', function () {
    if (session()->has('name')) {
        session()->pull('name');
    }
    return redirect()->route('login');
})->name('logout');
