<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use Symfony\Component\HttpFoundation\Response;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('houses.index', [
            'houses' => House::latest()->filter(request(['search']))->paginate(6)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */

    public function adminPage()
    {
        $car = Car::all();
        $house = House::all();
        $houseCount = $house->count();
        $carCount = $car->count();
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        return view('admin.index', ['carCount'=>$carCount, 'houseCount'=>$houseCount]);
    }


    public function create()
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'squer_feet' => 'required',
            'no_of_bedrooms' => 'required',
            'no_of_bathrooms' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('houses_photo', 'public');
        }

        // $formFields['user_id'] = auth()->id();

        House::create($formFields);

        return redirect('/admin/show')->with('message', 'House created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view('houses.show', [
            'house' => $house
        ]);
    }

    /**
     * Display the specified resource for admin.
     */
    public function show_house_admin(House $houses)
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        return view('houses.view-house', [
            'houses' => House::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        return view('houses.edit-house', ['house' => $house]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'squer_feet' => 'required',
            'no_of_bedrooms' => 'required',
            'no_of_bathrooms' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('houses_photo', 'public');
        }

        $house->update($formFields);

        return back()->with('message', 'House updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort(403, 'Unauthorized Action');
        // }
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        if ($house->photo && Storage::disk('public')->exists($house->photo)) {
            Storage::disk('public')->delete($house->photo);
        }
        $house->delete();
        return redirect('/admin/show')->with('message', 'house deleted successfully');
    }
}
