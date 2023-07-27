<x-layout>
    @include('partials._search')
    <a href="/cars" class="btn btn-dark ml-4 mb-4 pl-4"><i class="bi bi-arrow-left"></i> Back</a>
    <section class="">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <div class="card">
                       <div id="carouselExampleControls" class="carousel slide mb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($car->images as $index => $image)
                            <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                                <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100" alt="Product Image">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                
                    <div class="row">
                        @foreach ($car->images as $index => $image)
                        <div class="col-4 col-sm-3 col-md-2 mb-3">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Product Image" class="img-fluid img-thumbnail"
                                onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}', {{ $index }})">
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h6 class="small">Code: Cr{{ $car->id + 100 }}</h6>
                            <h2 class="fw-bold">{{ $car->model }}</h2>
                            <div class="text-muted">
                                <i class="bi bi-currency-dollar"></i> Price: {{ $car->price }} Birr
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-rulers"></i> Manufacturer: {{ $car->manufacturer }}
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-geo-alt"></i> Location: {{ $car->location }}
                            </div>
                            <div class="text-muted">
                                Transmission: {{ $car->transmission }}
                            </div>
                            <div class="text-muted">
                                Year: {{ $car->year }}
                            </div>
                            <div class="text-muted">
                                Mileage: {{ $car->mileage }}
                            </div>
                            <div class="text-muted">
                                Fuel Type: {{ $car->fuel_type }}
                            </div>
                        </div>
                    </div>
                    <div class="card bg-light border-primary rounded">
                        <div class="card-body">
                            <h5 class="fw-bold">Description</h5>
                            <p class="lead">{{ $car->description }}</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <i class="bi bi-telephone"></i> Phone Number: 09************
                            </li>
                            <li class="list-group-item border-0">
                                <i class="bi bi-telegram"></i> Telegram Number: <a href="https://t.me/*****"
                                    target="_blank">https://t.me/*****</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>
