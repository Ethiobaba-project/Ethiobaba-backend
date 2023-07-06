<?php

namespace App\Http\Controllers;

use LDAP\Result;
use App\Models\Car;
use App\Models\CarImage;
use Illuminate\Http\Request;
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
            'cars' => Car::latest()->filter(request(['search']))->paginate(2)
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
        // dd($request);
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
            'location'=>'required',
            'description' => 'nullable|required',
        ]);
        // $formFields['user_id'] = auth()->id();
        // Car::create($formData);

        


        // Create a new Car instance and save it
        $car = new Car;
        $car->manufacturer = $formData['manufacturer'];
        $car->model = $formData['model'];
        $car->year = $formData['year'];
        $car->mileage = $formData['mileage'];
        $car->price = $formData['price'];
        $car->color = $formData['color'];
        $car->body_type = $formData['body_type'];
        $car->fuel_type = $formData['fuel_type'];
        $car->transmission = $formData['transmission'];
        $car->location = $formData['location'];
        $car->description = $formData['description'];
        $car->save();
        // Upload and associate the images with the car
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $image) {
                $imagePath = $image->store('car_images', 'public');
                $carImage = new CarImage;
                $carImage->car_id = $car->id;
                $carImage->image_path = $imagePath;
                $carImage->save();
            }
        }

        return redirect('/admin/cars/show')->with('message', 'Car has been saved successfully!');
        // Redirect or return a response as needed
        // return redirect()->back()->with('message', 'Car has been saved successfully!');
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
            'cars' => Car::latest()->filter(request(['search']))->paginate(6)
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
