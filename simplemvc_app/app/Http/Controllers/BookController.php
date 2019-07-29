<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Auth;

class BookController extends Controller
{
    public function index() {
        return view('createBook');
    }

    public function store() {

        $type_id = 1; //this is the ID of manga in types table

        // This function eill create a book the belongs to the current login user
        $book = Auth::user()->books()->create([
            'title' => request()->title,
            'description' => request()->description
        ]);
        
        $book->types()->attach([1, 2]);

        // $book = Book::create([
        //     'title' => request()->title,
        //     'description' => request()->description,
        //     'user_id' => Auth::user()->id
        // ]
        // );
        // $book = new Book();
        // $book->title = request()->title;
        // $book->description = request()->description;
        // $book->save();

        return redirect('display-books');
    }

    public function display() {
        // $books = Book::all();
        $books = Auth::user()->books;

        return view('displayBooks', compact('books'));
    }

    public function show($id) {

        $book = Book::whereId($id)->first();
        // $book = Book::find($id);

        return view('showDetail', compact('book'));
        
    }

    public function delete ($id)
    {
        Book::find($id)->delete();
        return redirect('/display-books');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('editBook', ['book' => $book]);
    }

    public function editStore($id)
    {

        $book = Book::create([
            'title' => request()->title,
            'description' => request()->description,
        ]);
        // $book = Book::find($id);
        // $book->title = request()->title;
        // $book->description = request()->description;
        // $book->save();

        return redirect('/display-books');
    }
}
