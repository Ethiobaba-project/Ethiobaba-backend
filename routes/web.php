<?php

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('houses', [
        'heading' => 'Latest Houses',
        'houses'=>House::all()
    ]);
});
Route::get('/houses/{house}', function(House $house) {
        return view('house',[
            'house'=>$house
        ]);
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