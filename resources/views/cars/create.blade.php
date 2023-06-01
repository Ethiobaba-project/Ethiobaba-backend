<x-admin-layout>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Add new Car for sell </h3>
                        </div>
                        <div class="card-body ">
                            <form method="POST" enctype="multipart/form-data" action="/cars/store">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Manufacturer</label>
                                            <input type="text" name="manufacturer" class="form-control"
                                                placeholder="Manufacturer" value="{{ old('manufacturer') }}" required>
                                            @error('manufacturer')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Model</label>
                                            <input type="text" name="model" class="form-control"
                                                placeholder="Model" value="{{ old('model') }}" required>
                                            @error('model')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input type="number" name="year" class="form-control" placeholder="Year"
                                                value="{{ old('year') }}" required>
                                            @error('year')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Kilo meter</label>
                                            <input type="number" name="mileage" class="form-control"
                                                placeholder="Kilo meter" value="{{ old('mileage') }}" required>
                                            @error('mileage')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" step="0.01" name="location" class="form-control"
                                                placeholder="location" value="{{ old('location') }}" required>
                                            @error('location')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" step="0.01" name="price" class="form-control"
                                                placeholder="Price" value="{{ old('price') }}" required>
                                            @error('price')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" class="form-control"
                                                placeholder="Color" value="{{ old('color') }}" required>
                                            @error('color')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Body Type</label>
                                            <input type="text" name="body_type" class="form-control"
                                                placeholder="Body Type" value="{{ old('body_type') }}" required>
                                            @error('body_type')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Fuel Type</label>
                                            <select name="fuel_type" class="form-control" required>
                                                <option value="">Select Fuel Type</option>
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
                                                <option value="">Select Transmission</option>
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
                                            <textarea class="form-control" name="description" rows="4" placeholder="Enter about the car..." required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Images</label>
                                            <input type="file" name="photo[]" value="{{ old('photo') }}" required
                                                multiple class="form-control-file" id="exampleFormControlFile1">
                                            @error('photo')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="display-flex">
                                    <button name="addcar" type="submit"
                                        class="btn btn-primary mb-3 mr-3 btn-md float-right">Add</button>
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
