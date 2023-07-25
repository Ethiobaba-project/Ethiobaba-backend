@props(['car'])
<x-card>
    <!-- Product image-->
    <img class="card-img-top" src="{{ $car->images ? asset('storage/' . $car->images[0]->image_path) : asset('/images/no-image.png') }}"
        alt="Car Image" />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $car->model }}</h5>
            <!-- Product price-->
            <h6>{{ $car->price }} Birr</h6>
            <h6> <i class="bi bi-geo-alt"></i>{{ $car->location }}</h6>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/cars/{{ $car->id }}">View
                Detial</a></div>
    </div>
</x-card>
