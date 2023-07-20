<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating the request
        $fieldForm = $request->validate([
            'price' => ['required','numeric'],
            'title' => ['required','string'],
            'author' => ['required','string'],
            'description' => ['required','string'],
            'language' => ['required','string'],
            'paper_back' => ['required','integer'],
            'image' => ['required','image']
        ]);
        //saving the image in the storage
        $fieldForm ['image'] = $request->file('image')->store('book_images','public');
        auth()->user()->book()->create($fieldForm) ;
        return redirect()->route('admin_home')->with('message', 'Book has been saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        return view('books.edit',['book'=> $book]);
    }

    public function show_book_admin() {

        if (Auth::user()->is_super_admin != 1) {
            abort(403);
        }

        return view('books.view',['books'=> Book::latest()->paginate(5)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
        $fieldForm = $request->validate([
            'price' => ['required','numeric'],
            'title' => ['required','string'],
            'author' => ['required','string'],
            'description' => ['required','string'],
            'language' => ['required','string'],
            'paper_back' => ['required','integer'],
            'image' => ['image']
        ]);

        if($request->hasFile('image')){
            Storage::disk('public')->delete($book->image);
            $fieldForm ['image'] = $request->file('image')->store('book_images','public');
        }
        $book->update($fieldForm);
        return redirect()->route('admin_home')->with('message', 'Book has been saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
        Storage::disk('public')->delete($book->image);
        $book->delete();
        return redirect()->route('admin_home')->with('message', 'Book has been Deleted successfully!');

    }
}