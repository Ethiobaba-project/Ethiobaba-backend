<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('houses.index', [
            'houses'=>House::latest()->filter(request(['search']))->paginate(6)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'price' =>'required', 
            'squer_feet' =>'required', 
            'no_of_bedrooms' =>'required', 
            'no_of_bathrooms' =>'required', 
            'description' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        House::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view('houses.show',[
            'house'=>$house
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHouseRequest $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
