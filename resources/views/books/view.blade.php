<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header bg-primary ">
                                <h3 class="card-title">Book List</h3>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 450px;">
                                <table class="table table-head-fixed text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Language</th>
                                            <th>Paper Back</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->id }}</td>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->author }}</td>
                                            <td>{{ $book->language }}</td>
                                            <td>{{ $book->paper_back }}</td>
                                            <td>{{ $book->price }}</td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="{{ route("admin_edit_book", $book->id) }}" class="btn btn-info mr-3 btn-sm rounded">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form method="POST" action="{{ route("admin_delete_book", $book->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger mr-3 btn-sm">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                                <div class="mt-6 p-4">
                                    {{ $books->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>

    </div>

</x-admin-layout>
