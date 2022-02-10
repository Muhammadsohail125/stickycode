<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        return view('admin/book/index')->with(compact('books'));
    }

    public function create()
    {
        return view('admin/book/create');
    }

    public function store()
    {
        // return view('admin/book');
    }

    public function edit($id)
    {
         return view('admin/book/edit');
    }

    public function update($id)
    {
        // return view('admin/book/edit');
    }

    public function status($id)
    {
        $book = Book::find($id);
        $newstatus = ($book->status == 'DEACTIVE' ? 'ACTIVE' : 'DEACTIVE');
        $book->update([
            'status' => $newstatus
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->back();
    }
}
