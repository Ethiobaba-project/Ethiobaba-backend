<x-admin-layout>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default mt-5">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Add new Book for sell </h3>
                        </div>
                        <div class="card-body ">
                            <form method="POST" enctype="multipart/form-data" action= "{{ route('admin_store_book') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Manufacturer" value="{{ old('title') }}" required>
                                            @error('title')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Author</label>
                                            <input type="text" name="author" class="form-control"
                                                placeholder="Manufacturer" value="{{ old('author') }}" required>
                                            @error('author')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Language</label>
                                            <input type="text" name="language" class="form-control"
                                                placeholder="Manufacturer" value="{{ old('language') }}" required>
                                            @error('language')
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" step="0.01" name="price" class="form-control"
                                                placeholder="Price" value="{{ old('price') }}" required>
                                            @error('price')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Paper Back</label>
                                            <input type="number" name="paper_back" class="form-control"
                                                placeholder="Price" value="{{ old('paper_back') }}" required>
                                            @error('paper_back')
                                                <p class="text-danger small mt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Images</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" value="{{old('image')}}" required id="formFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="display-flex">
                                    <button name="addbook" type="submit"
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
