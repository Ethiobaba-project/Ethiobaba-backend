<x-layout>
    @include('partials._search')
    <a href="/books" class="btn btn-dark ml-4 mb-4 pl-4"><i class="bi bi-arrow-left"></i> Back</a>
    <section>
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="{{ $book->image ? asset('storage/' . $book->image) : asset('/images/no-image.png') }}"
                        alt="Book Cover" /></div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <h6 class="small">ID: {{ $book->id }}</h6>
                    </div>
                    <h2 class="fw-bold">{{ $book->title }}</h2>
                    <div class="text-muted">
                        <i class="bi bi-currency-dollar"></i> Price: {{ $book->price }} Birr
                    </div>
                    <div class="text-muted">
                        Author: {{ $book->author }}
                    </div>
                    <div class="text-muted">
                        Language: {{ $book->language }}
                    </div>
                    <div class="text-muted">
                        Number of pages: {{ $book->paper_back}}
                    </div>
                    <div class="text-muted rounded border border-primary m-2">
                        <p class="lead">{{ $book->description }}</p>
                    </div>
                    <div class="d-flex">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="bi bi-telephone"></i> Phone Number: 09************
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-telegram"></i> Telegram Number: <a href="https://t.me/*****" target="_blank">https://t.me/*****</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
