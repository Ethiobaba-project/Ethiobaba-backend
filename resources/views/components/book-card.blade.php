@props(['book'])

<x-card>
    <!-- Product image -->
    <img class="card-img-top" src="{{ $book->image ? asset('storage/' . $book->image) : asset('/images/no-image.png') }}"
        alt="Book Image" />
    <!-- Product details -->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product title -->
            <h5 class="fw-bolder">{{ $book->title }}</h5>
            <!-- Product author -->
            <p class="mb-0">{{ $book->author }}</p>
            <!-- Product price -->
            <h6>{{ $book->price }} Birr</h6>
        </div>
    </div>
    <!-- Product actions -->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/books/{{ $book->id }}">View Detail</a></div>
    </div>
</x-card>
