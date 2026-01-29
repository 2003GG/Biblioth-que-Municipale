<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $Books = Book::All();
        return view('Books', compact('Books'));

    }

    public function Creat()
    {
        return view('addbook');
    }
    public function store(Request $request)
    {
        $bookData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string',
        ]);
        $newBook = Book::create($bookData);
        return redirect(route('Books.index'));
    }

    public function edit(Request $request)
    {

        $selectedProduct = $request->has('id') ? Book::find($request->id) : null;
        return view('updateBook');
    }

    public function update(Request $request, $id)
    {
        $Book = Book::findOrFail($id);
        $Book->update($request->all());
        return redirect()->route('Books.index');
    }

}
