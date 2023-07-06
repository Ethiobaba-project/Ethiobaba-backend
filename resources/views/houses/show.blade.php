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
</x-layout>
