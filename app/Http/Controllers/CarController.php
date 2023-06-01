<?php

namespace App\Http\Controllers;

use LDAP\Result;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('cars.index', [
            'cars' => Car::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

     /**
     * Display the specified resource for admin.
     */
    public function show_car_admin(Car $cars)
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        return view('cars.view-car', [
            'cars' => Car::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
