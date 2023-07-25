<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\HouseImages;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(House $house)
    {
        return view('houses.index', [
            'houses' => House::latest()->filter(request(['search']))->paginate(8),
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
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        $formData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'squer_feet' => 'required|numeric',
            'no_of_bedrooms' => 'required|integer',
            'no_of_bathrooms' => 'required|integer',
            'description' => 'required|string',
            'photo' => 'required',
            'photo.*' => 'image'
        ]);

        unset($formData['photo']);

        $house = auth()->user()->house()->create($formData);

        // Upload and associate the images with the house
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $image) {
                $image_path = $image->store('house_images','public');
                HouseImages::create([
                    "house_id" => $house->id,
                    "image_path" => $image_path
                ]);
            }
        }
        return redirect()->route('admin_home')->with('message', 'House created successfully!');
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
    public function show_house_admin()
    {
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        return view('houses.view', [
            'houses' => House::latest()->filter(request(['search']))->paginate(2)
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
        return view('houses.edit', [
            'house' => $house,
            'images' => $house->images
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        $formData = $request->validate([
            'title' => 'required|string',
            'price' => 'required|numeric',
            'location' => 'required|string',
            'squer_feet' => 'required|numeric',
            'no_of_bedrooms' => 'required|integer',
            'no_of_bathrooms' => 'required|integer',
            'description' => 'required|string',
            'photo' => 'required',
            'photo.*' => 'image'
        ]);

        unset($formData['photo']);

        if ($request->hasFile('photo')){
            foreach ($house->images as $image){
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
            foreach ($request->file('photo') as $image) {
                $image_path = $image->store('house_images','public');
                $house->images()->create(["image_path"=>$image_path]);
             }
        }
        $house->update($formData);
        return back()->with('message', 'House updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }


        foreach ($house->images as $image){
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $house->delete();
        return back()->with('message', 'House has been deleted successfully!');

    }
}
