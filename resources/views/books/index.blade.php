@if (Auth::check() && Auth::user()->is_super_admin == 1)
    @include('admin.index')
@else
    <x-layout>
        @if (!Auth::check())
            @include('partials._hero')
        @endif
        @include('partials._search')
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @unless (count($books) == 0)
                    @foreach ($books as $book)
                        <x-book-card :book="$book" />
                    @endforeach
                @else
                    <p>There are no books available.</p>
                @endunless
            </div>
            <div class="mt-6 p-4">
                {{ $books->links() }}
            </div>
        </div>
    </x-layout>
@endif
