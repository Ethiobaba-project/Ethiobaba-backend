<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header bg-primary ">
                                <h3 class="card-title">car List</h3>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 450px;">
                                <table class="table table-head-fixed text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Manufacturer</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Mileage</th>
                                            <th>Price</th>
                                            <th>Fuel Type</th>
                                            <th>Transmission</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->manufacturer }}</td>
                                            <td>{{ $car->model }}</td>
                                            <td>{{ $car->year }}</td>
                                            <td>{{ $car->mileage }}</td>
                                            <td>{{ $car->price }} Birr</td>
                                            <td>{{ $car->fuel_type }}</td>
                                            <td>{{ $car->transmission }}</td>
                                            <td>{{ $car->location }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="/admin/cars/{{ $car->id }}/edit" class="btn btn-info mr-3 btn-sm rounded">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form method="POST" action="{{ route("admin_delete_car", $car->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger mr-3 btn-sm">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                <div class="mt-6 p-4">
                                    {{ $cars->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

    </div>

</x-admin-layout>
