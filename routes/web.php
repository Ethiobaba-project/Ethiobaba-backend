<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomePageController;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HouseController;
use App\Models\HomePage;
use Symfony\Component\HttpFoundation\Response;

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

//single house
Route::get('/houses/{house}', [HouseController::class, 'show']);

//show admin page
Route::get('/admin', [HouseController::class, 'adminPage'])->middleware('auth');

//create new house
Route::get('/admin/houses/create', [HouseController::class, 'create'])->middleware('auth');


//add new house to database
Route::post('/admin/houses', [HouseController::class, 'store'])->middleware('auth');

//get all house on admin page
Route::get('/admin/show', [HouseController::class, 'show_house_admin'])->middleware('auth');

// Show Edit Form
Route::get('/admin/houses/{house}/edit', [HouseController::class, 'edit'])->middleware('auth');

//Update house 
Route::put('/admin/houses/{house}', [HouseController::class, 'update'])->middleware('auth');

//delete house 
Route::delete('/admin/houses/{house}', [HouseController::class, 'destroy'])->middleware('auth');
//for house
Route::get('/houses', [HouseController::class, 'index']);

//for car
//all cars 
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{car}', [CarController::class, 'show']);
Route::get('/admin/cars/create', [CarController::class, 'create'])->middleware('auth');
Route::post('/cars/store', [CarController::class, 'store']);
Route::get('/admin/cars/show', [CarController::class, 'show_car_admin'])->middleware('auth');
Route::get('/admin/cars/{car}/edit', [CarController::class, 'edit'])->middleware('auth');
Route::put('/admin/cars/{car}', [CarController::class, 'update'])->middleware('auth');
Route::delete('/admin/cars/{car}', [CarController::class, 'destroy'])->middleware('auth');

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




//admin test
// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware('auth');

// //add home
// Route::get('/admin/add', function(){
//     return view('admin.add-house');
// });



// Route::get('/hello', function () {
//     return response('<h1>hello world!</h1>');
// });
// Route::get('/post/{id}', function($id)
// {
//     dd($id);
//     return response('Post '.$id);
// })->where('id', '[0_9]+');


// Route::get('/search', function(Request $request)

// {
//     dd($request);
//     // return response($request);
// });