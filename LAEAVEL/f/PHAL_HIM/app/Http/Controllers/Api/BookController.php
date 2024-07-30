<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookListResource;
use App\Http\Resources\ShowBookListResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        $books = BookListResource::collection($books);
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Book::create($request->all());
        return response()->json([
            'data' => true,
            'message' => 'Book created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = Book::findOrFail($id);
        $book = new ShowBookListResource($book);
        return $book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json([
            'data' => true,
           'message' => 'Book updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json([
            'data' => true,
           'message' => 'Book deleted successfully'
        ]);
    }
}
