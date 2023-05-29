<x-admin-layout>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Edit </h3>
                        </div>
                        <div class="card-body ">
                            <form method="POST" enctype="multipart/form-data" action="/admin/houses/{{ $house->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Title" value="{{ $house->title }}" required>
                                            @error('title')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Number of bed rooms</label>
                                            <input type="number" name="no_of_bedrooms" class="form-control"
                                                placeholder="{{ $house->no_of_bedrooms }}" required>
                                            @error('no_of_bedrooms')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Number of Bath rooms</label>
                                            <input type="number" name="no_of_bathrooms" class="form-control"
                                                placeholder="{{ $house->no_of_bathrooms }}" required>
                                            @error('no_of_bathrooms')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Square Feet</label>
                                            <input type="number" name="squer_feet" class="form-control"
                                                placeholder="{{ $house->squer_feet }}" required>
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
                                                placeholder="Price" value="{{ $house->price }}" required>
                                            @error('Price')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" step="0.01" name="location" class="form-control"
                                                placeholder="location" value="{{ $house->location }}" required>
                                            @error('location')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" rows="4" placeholder="Enter about the Drug..." required>{{ $house->description }}</textarea>
                                            @error('description')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <label for="exampleInputFile">Images</label>
                                                    <input type="file" name="photo" required multiple
                                                        class="form-control-file" id="exampleFormControlFile1">
                                                    <img src="{{ $house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png') }}"
                                                    class="img-fluid mr-2 mb-2" style="width: 78px; height: auto;" alt="Product Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col -->

                                </div>
                                <div class="display-flex">
                                    <button name="addhouse" type="submit"
                                        class="btn btn-primary mb-3 mr-3 btn-md float-right">Update</button>
                                </div>
                            </form> <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-admin-layout>
