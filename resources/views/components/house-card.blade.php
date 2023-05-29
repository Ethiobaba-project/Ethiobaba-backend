@props(['house'])
<x-card >
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$house->photo ? asset('storage/' . $house->photo) : asset('/images/no-image.png')}}" alt="home image" />
        <div>
            <h3 class="text-2xl">
                <a href="/houses/{{ $house->id }}">{{ $house->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">Price = {{ $house->price }} Birr</div>
            <div class="text-xl font-bold mb-4">Square feet = {{ $house->squer_feet }} m<sup>2</sup></div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $house->location }}
            </div>
        </div>
    </div>

</x-card>
 