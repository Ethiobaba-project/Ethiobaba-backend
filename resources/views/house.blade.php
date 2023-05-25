@extends('layout')
@section('content')
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    
        <div class="mx-4">
            <x-card class="bg-black">
            <div class="grid  gap-4 md:grid-cols-2">
                <div>
                    <div>
                        <img src="{{ asset('images/home.jpg') }}" class="w-full" alt="Product Image">
                    </div>
                    <div class="grid grid-cols-5 gap-2 mt-2">
                        <div>
                            <img src="{{ asset('images/home.jpg') }}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{ asset('images/no-image.png') }}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{ asset('images/home.jpg') }}" alt="Product Image">
                        </div>
                        <div>
                            <img src="{{ asset('images/home.jpg') }}" alt="Product Image">
                        </div>
                        <div class="col-span-1">
                            <img src="{{ asset('images/home.jpg') }}" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">{{ $house->title }}</h3>
                    <hr class="my-4">
                    
                    <div class="bg-gray-200 py-2 px-4">
                        <h2 class="text-3xl font-bold">
                            ${{ $house->price }}
                        </h2>
                    </div>
                    <div class="mt-6">
                        <ul class="flex border-b border-gray-300">
                            <li class="mr-6">
                                <a class="text-blue-500 font-semibold border-b-2 border-blue-500 pb-2"
                                    href="#product-desc">Description</a>
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
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="fas fa-envelope-square fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray-500">
                            <i class="fas fa-rss-square fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </x-card>
        </div>
@endsection
