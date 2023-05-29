<?php

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
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
Route::get('/', [HouseController::class, 'index']);

//create new house
Route::get('/houses/create', [HouseController::class, 'create']);

//add new house to database
Route::post('/houses', [HouseController::class, 'store']);

//single house
Route::get('/houses/{house}', [HouseController::class, 'show']);





//admin test
Route::get('/admin', function(){
    return view('admin.index');
});

//add home
Route::get('/admin/add', function(){
    return view('admin.add-house');
});
Route::get('/admin/show', function(){
    return view('admin.view-house');
});



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