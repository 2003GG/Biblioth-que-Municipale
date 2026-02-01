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

    public function edit(Book $book) {


    return view('updateBook', ['book'=>$book]);
}
    public function update(Book $book,Request $request)
    {
         $bookData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string',
        ]);
        $book->update($bookData);
        return redirect(route('Books.index'));

}
    public function destroy(Book $book)
    {
            $book->delete();
            return redirect(route('Books.index'))->with('success','book delete successefuly');


    }
}
