<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\BookController;

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
//all house 
Route::get('/', [HomePageController::class, 'index']);

Route::get('/houses/{house}', [HouseController::class, 'show']);
Route::get('/houses', [HouseController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{car}', [CarController::class, 'show']);

Route::middleware(['auth'])->group(function(){
    
    //admin routes
    Route::get('/admin', [HouseController::class, 'adminPage'])->name("admin_home");

    //admin house routes
    Route::get('/admin/houses/create', [HouseController::class, 'create'])->name("admin_create_house");
    Route::post('/admin/houses', [HouseController::class, 'store'])->name("admin_store_house");
    Route::get('/admin/show', [HouseController::class, 'show_house_admin'])->name("admin_show_house");
    Route::get('/admin/houses/{house}/edit', [HouseController::class, 'edit'])->name("admin_edit_house");
    Route::put('/admin/houses/{house}', [HouseController::class, 'update'])->name("admin_update_house");
    Route::delete('/admin/houses/{house}', [HouseController::class, 'destroy'])->name("admin_delete_house");

    // admin car routes
    Route::get('/admin/cars/create', [CarController::class, 'create'])->name("admin_create_car");
    Route::post('/cars/store', [CarController::class, 'store'])->name("admin_store_car");
    Route::get('/admin/cars/show', [CarController::class, 'show_car_admin'])->name("admin_show_car");
    Route::get('/admin/cars/{car}/edit', [CarController::class, 'edit'])->name("admin_edit_car");
    Route::put('/admin/cars/{car}', [CarController::class, 'update'])->name("admin_update_car");
    Route::delete('/admin/cars/{car}', [CarController::class, 'destroy'])->name("admin_delete_car");

    // admin book routes

    Route::get('/admin/books/create', [BookController::class, 'create']) ->name('admin_create_book');
    Route::post('/admin/books',[BookController::class, 'store']) ->name('admin_store_book');

});
//show registration form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);