<x-admin-layout>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Edit Car for sell </h3>
                        </div>
                        <div class="card-body ">
                            <form method="POST" enctype="multipart/form-data" action="#">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Manufacturer</label>
                                            <input type="text" name="manufacturer" class="form-control"
                                                placeholder="Manufacturer" value="{{ $car->manufacturer }}" required>
                                            @error('manufacturer')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" name="model" class="form-control"
                                                placeholder="Model" value="{{ $car->model }}" required>
                                            @error('model')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="number" name="year" class="form-control" placeholder="Year"
                                                value="{{ $car->year }}" required>
                                            @error('year')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Kilo meter</label>
                                            <input type="number" name="mileage" class="form-control"
                                                placeholder="Kilo meter" value="{{ $car->mileage }}" required>
                                            @error('mileage')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" step="0.01" name="location" class="form-control"
                                                placeholder="location" value="{{ $car->location }}" required>
                                            @error('location')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" step="0.01" name="price" class="form-control"
                                                placeholder="Price" value="{{ $car->price }}" required>
                                            @error('price')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" class="form-control"
                                                placeholder="Color" value="{{ $car->color }}" required>
                                            @error('color')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type="text" name="body_type" class="form-control"
                                                placeholder="Body Type" value="{{ $car->body_type }}" required>
                                            @error('body_type')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Fuel Type</label>
                                            <select name="fuel_type" class="form-control" required>
                                                <option value="">{{ $car->fuel_type }}</option>
                                                <option value="Gasoline"
                                                    {{ old('fuel_type') === 'Gasoline' ? 'selected' : '' }}>Gasoline
                                                </option>
                                                <option value="Diesel"
                                                    {{ old('fuel_type') === 'Diesel' ? 'selected' : '' }}>Diesel
                                                </option>
                                                <option value="Electric"
                                                    {{ old('fuel_type') === 'Electric' ? 'selected' : '' }}>Electric
                                                </option>
                                            </select>
                                            @error('fuel_type')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Transmission</label>
                                            <select name="transmission" class="form-control" required>
                                                <option value="">{{ $car->transmission }}</option>
                                                <option value="Automatic"
                                                    {{ old('transmission') === 'Automatic' ? 'selected' : '' }}>
                                                    Automatic</option>
                                                <option value="Manual"
                                                    {{ old('transmission') === 'Manual' ? 'selected' : '' }}>Manual
                                                </option>
                                            </select>
                                            @error('transmission')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4" placeholder="Enter about the car..." required>{{ $car->description }}</textarea>
                                            @error('description')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Images</label>
                                            <div div class="row">
                                                @foreach ($images as $image)
                                                <div class='col-md-4 col-lg-3 col-sm-6'>
                                                        <div class='product-image-thumb'>
                                                            <img src={{ asset('storage/'.$image->image_path) }} alt='Product Image' class='img-fluid img-thumbnail'>
                                                        </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="input-group mt-2">
                                                <div class="custom-file">
                                                    <input type="file" name="photo[]" class="custom-file-input form-control-file" value="{{old('photo')}}" required multiple id="exampleFormControlFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    @error('photo')
                                                        <p class="text-danger small mt-1">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="display-flex">
                                    <button name="updatecar" type="submit"
                                        class="btn btn-primary mb-3 mr-3 btn-md float-right">Update</button>
                                </div>
                            </form>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
