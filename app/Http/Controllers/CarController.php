<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('cars.index', [
            'cars' => Car::latest()->filter(request(['search']))->paginate(8)
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
    public function store(Request $request)
    {
        // Validate the form data
        $formData = $request->validate([
            'manufacturer' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'mileage' => 'required|integer',
            'price' => 'required|numeric',
            'color' => 'required',
            'body_type' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'location' => 'required',
            'description' => 'nullable|required',
            'photo' => "required",
            'photo.*' => "image",
        ]);

        
        unset($formData['photo']);

        $car = auth()->user()->car()->create($formData);
        // Upload and associate the images with the car
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $image) {
                $image_path = $image->store('car_images','public');
                CarImage::create([
                    "car_id" => $car->id,
                    "image_path" => $image_path
                ]);
            }
        }

        return redirect()->route('admin_show_car')->with('message', 'Car has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show', [
            'car' => $car
        ]);
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
            'cars' => Car::latest()->filter(request(['search']))->paginate(6)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        // dd($car->images);

        return view("cars.edit",[
            "car" => $car,
            "images" => $car->images
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
        $formData = $request->validate([
            'manufacturer' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'mileage' => 'required|integer',
            'price' => 'required|numeric',
            'color' => 'required',
            'body_type' => 'required',
            'fuel_type' => 'required',
            'transmission' => 'required',
            'location' => 'required',
            'description' => 'nullable|required',
            'photo.*' => "image"
        ]);

        unset($formData['photo']);

        if ($request->hasFile('photo')){
            foreach ($car->images as $image){
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
            foreach ($request->file('photo') as $image) {
                $image_path = $image->store('car_images','public');
                $car->images()->create(['image_path'=>$image_path]);
             }
        }
        $car->update($formData);
        return back()->with('message', 'Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        foreach ($car->images as $image){
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $car->delete();
        return redirect()->route('admin_home')->with('message', 'car has been deleted successfully!');

    }
}
