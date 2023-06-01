@if (Auth::check() && Auth::user()->is_super_admin == 1)
    @include('admin.index')
@else
    <x-layout>
        @if (!Auth::check())
            @include('partials._hero')
        @endif
        @include('partials._search')
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @unless (count($houses) == 0)
                @foreach ($houses as $house)
                    <x-house-card :house="$house" />
                @endforeach
            @else
                <p>There are no houses available.</p>
            @endunless
        </div>
        <div class="mt-6 p-4">
            {{ $houses->links() }}
        </div>
    </x-layout>
@endif
