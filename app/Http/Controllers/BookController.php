<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BookController extends Controller
{
    public function index(){
        $books = Books::all();
        return view('books.index', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        //\Log::debug($request);
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'release_date' => $request->release_date
        ];

        Books::create($data);
        return redirect('books');
    }




    public function edit($id){
        $book = Books::find($id);
        return view('books.edit', ['book' => $book]);
    }
    public function update(Request $request, $id){
        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'release_date' => $request->release_date
        ];

        $book = Books::find($id);
        $book->update($data);

        return redirect('books');
    }
}
