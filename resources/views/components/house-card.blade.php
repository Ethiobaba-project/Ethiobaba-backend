@props(['house'])
<x-card>
    <!-- Product image-->
    <img class="card-img-top"
        src="{{ $house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png') }}" alt="..." />
    {{-- @foreach ($images as $image)
        <div class='col-md-4 col-lg-3 col-sm-6'>
            <div class='product-image-thumb'>
                <img src={{ asset('storage/' . $image->image_path) }} alt='Product Image' class='img-fluid img-thumbnail'>
            </div>
        </div>
    @endforeach --}}
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h5 class="fw-bolder">{{ $house->title }}</h5>
            <!-- Product price-->
            <h6>{{ $house->price }} Birr</h6>
            <h6> <i class="bi bi-geo-alt"></i>{{ $house->location }}</h6>
        </div>
    </div>
    <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/houses/{{ $house->id }}">View
                Detial</a></div>
    </div>
</x-card>
