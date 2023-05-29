<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header bg-primary ">
                                <h3 class="card-title">House List</h3>
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
                                    @foreach ($houses as $house)
                                        <tbody>
                                            <tr>
                                                <td>{{ ($house->id)+1000 }}</td>
                                                <td>{{ $house->title }}</td>
                                                <td>{{ $house->no_of_bathrooms }}</td>
                                                <td>{{ $house->no_of_bedrooms }}</td>
                                                <td>{{ $house->price }} Birr</td>
                                                <td>{{ $house->squer_feet }} m<sup>2</td>
                                                <td>{{ $house->location }}</td>
                                                <td> <a href='#' class='btn btn-primary btn-sm'>view detail</a>
                                                </td>

                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 p-4">
                        {{ $houses->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    
</x-admin-layout>
