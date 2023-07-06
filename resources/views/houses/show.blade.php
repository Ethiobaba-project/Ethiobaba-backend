<x-layout>
    @include('partials._search')
    <a href="/" class="btn btn-dark ml-4 mb-4 pl-4"><i class="bi bi-arrow-left"></i> Back</a>
    <section class="">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="{{ $house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png') }}"
                        alt="..." /></div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="small">Code: {{ $house->id + 100 }}</h6>
                            </div>
                            <h2 class="fw-bold">{{ $house->title }}</h2>
                            <div class="text-muted">
                                <i class="bi bi-currency-dollar"></i> Price: {{ $house->price }} Birr
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-rulers"></i> {{ $house->squer_feet }} m<sup>2</sup>
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-geo-alt"></i> Location: {{ $house->location }}
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-bed"></i> Number of bedrooms: {{ $house->no_of_bedrooms }}
                            </div>
                            <div class="text-muted">
                                <i class="bi bi-shower"></i> Number of Bathrooms: {{ $house->no_of_bathrooms }}
                            </div>
                            <div class="text-muted rounded border border-primary m-2">
                                <p class="lead">{{ $house->description }}</p>
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
    {{-- <div class="mx-4">
        <x-card class="bg-dark">
            <div class="grid gap-4 md:grid-cols-2">
                <div>
                    <div>
                        <img src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" class="w-full" alt="Product Image">
                    </div>
                    <div class="grid grid-cols-5 gap-2 mt-2">
                        <div>
                            <img src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{ asset('images/no-image.png') }}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" alt="Product Image">
                        </div>
                        <div class="col-span-1">
                            <img src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">{{ $house->title }}</h3>
                    <hr class="my-4">

                    <div class="bg-light py-2 px-4">
                        <h2 class="text-3xl font-bold">
                            ${{ $house->price }}
                        </h2>
                    </div>
                    <div class="mt-6">
                        <ul class="nav nav-tabs border-bottom border-secondary">
                            <li class="nav-item">
                                <a class="nav-link active" href="#product-desc">Description</a>
                            </li>
                        </ul>
                        <div class="mt-4">
                            <div id="product-desc" class="pb-4">
                                {{ $house->description }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-gray-500">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="bi bi-envelope"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="bi bi-rss"></i>
                        </a>
                    </div>
                </div>
            </div>
        </x-card>
    </div> --}}
</x-layout>
