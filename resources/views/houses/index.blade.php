<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($houses) == 0)
            @foreach ($houses as $house)
                <x-house-card :house="$house" />
            @endforeach
        @else
            <p>there is no house available</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $houses->links() }}
    </div>
</x-layout>
