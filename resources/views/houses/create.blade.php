<x-admin-layout>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Add new Home for sell </h3>
                        </div>
                        <div class="card-body ">
                            <form method="POST" enctype="multipart/form-data" action="/houses">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Title" value="{{ old('title') }}" required>
                                            @error('title')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Number of bed rooms</label>
                                            <input type="number" name="no_of_bedrooms" class="form-control"
                                                placeholder="{{ old('no_of_bedrooms') }}" required>
                                            @error('no_of_bedrooms')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Number of Bath rooms</label>
                                            <input type="number" name="no_of_bathrooms" class="form-control"
                                                placeholder="{{ old('no_of_bathrooms') }}" required>
                                            @error('no_of_bathrooms')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Square Feet</label>
                                            <input type="number" name="squer_feet" class="form-control"
                                                placeholder="{{ old('squer_feet') }}" required>
                                            @error('squer_feet')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" step="0.01" name="price" class="form-control"
                                                placeholder="Price" value="{{ old('price') }}" required>
                                            @error('Price')
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
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4" placeholder="Enter about the Drug..." required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputFile">Images</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="photo" class="custom-file-input"
                                                        value="{{ old('photo') }}" required>
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <!-- /.col -->

                                </div>
                                <div class="display-flex">
                                    <button name="addhouse" type="submit"
                                        class="btn btn-primary mb-3 mr-3 btn-md float-right">Add</button>
                                </div>
                            </form> <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
