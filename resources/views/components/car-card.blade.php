@props(['car'])
<x-card >
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$car->photo ? asset('storage/' . $car->photo) : asset('/images/no-image.png')}}" alt="home image" />
        <div>
            <h3 class="text-2xl">
                <a href="/cars/{{ $car->id }}">{{ $car->model }}</a>
            </h3>
            <div class="text-xl font-bold ">Price = {{ $car->price }} Birr</div>
            <div class="text-xl font-bold ">year = {{ $car->year }} </div>
            <div class="text-xl font-bold ">manufacturer = {{ $car->manufacturer }} </div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $car->location }}
            </div>
        </div>
    </div>

</x-card>