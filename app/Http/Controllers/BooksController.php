<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Book $book)
    {
    }

    public function edit(Book $book)
    {
    }

    public function update(Request $request, Book $book)
    {
    }

    public function destroy(Book $book)
    {
    }

    public function download(Book $book)
    {
        return "
        datos:
        {{$book["link"]}}
        ";
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . $book->link;
        return $file;
        $headers = array(
            'Content-Type: application/pdf',
        );

        //return response()->file($file, $headers);
        //return response()->download($file, headers: $headers);
    }
}
