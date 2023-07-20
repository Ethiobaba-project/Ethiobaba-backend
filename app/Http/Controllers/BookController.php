<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
        $fieldForm = $request->validate([
            'price' => ['required','numeric'],
            'title' => ['required','string'],
            'author' => ['required','string'],
            'description' => ['required','string'],
            'language' => ['required','string'],
            'paper_back' => ['required','integer'],
            'image' => ['required','image']
        ]);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
