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
                                            <th>Title</th>
                                            <th>Number of bed rooms</th>
                                            <th>Number of bath rooms</th>
                                            <th>Price</th>
                                            <th>Squer Feet</th>
                                            <th>location</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    @foreach ($cars as $car)
                                        <tbody>
                                            <tr>
                                                <td>{{ $car->id + 1000 }}</td>
                                                <td>{{ $car->title }}</td>
                                                <td>{{ $car->no_of_bathrooms }}</td>
                                                <td>{{ $car->no_of_bedrooms }}</td>
                                                <td>{{ $car->price }} Birr</td>
                                                <td>{{ $car->squer_feet }} m<sup>2</td>
                                                <td>{{ $car->location }}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a href='/admin/cars/{{ $car->id }}/edit'
                                                            class="btn btn-info mr-3 btn-sm rounded"><i class="fas fa-edit"></i>Edit</a>

                                                        <form method="POST" action="/admin/cars/{{ $car->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger mr-3 btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        </tbody>
                                    @endforeach
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
