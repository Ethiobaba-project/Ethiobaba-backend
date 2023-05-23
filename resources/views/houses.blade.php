
@extends('layout')
@section('content')
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless (count($houses) == 0)
        @foreach ($houses as $house)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="images/home.jpg" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="/houses/{{ $house->id }}">{{ $house->title }}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">Price = {{ $house->price }}</div>
                        <div class="text-xl font-bold mb-4">Square feet = {{ $house->squer_feet }}</div>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{ $house->location }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>there is no house available</p>
    @endunless
</div> 
@endsection


