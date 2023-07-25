<x-layout>
    @include('partials._search')
    <a href="/cars" class="btn btn-dark ml-4 mb-4 pl-4"><i class="bi bi-arrow-left"></i> Back</a>
    <section class="">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src="{{ $car->images ? asset('storage/' . $car->images[0]->image_path) : asset('/images/no-image.png') }}"
                        alt="..." />
                        <div div class="row mt-3">
                            @foreach ($car->images as $image)
                            <div class='col-md-4 col-lg-3 col-sm-6'>
                                    <div class='product-image-thumb'>
                                        <img src={{ asset('storage/'.$image->image_path) }} alt='Product Image' class='img-fluid img-thumbnail'>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="small">Code: C{{ $car->id + 100 }}</h6>
                            </div>
                            <h2 class="fw-bold">{{ $car->model }}</h2>
                            <div class="text-muted">
                                <i class="bi bi-currency-dollar"></i> Price: {{ $car->price }} Birr
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-rulers"></i> Manufacturer {{ $car->manufacturer }} 
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
                                Feul Type: {{ $car->fuel_type }}
                            </div>
                            <div class="text-muted rounded border border-primary m-2">
                                <p class="lead">{{ $car->description }}</p>
                            </div>
                            <div class="d-flex">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="bi bi-telephone"></i> Phone Number: 09************
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-telegram"></i> Telegram Number: <a href="https://t.me/*****" target="_blank">https://t.me/*****</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</x-layout>

