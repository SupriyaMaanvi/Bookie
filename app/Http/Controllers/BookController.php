<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
   
    public function index(Request $request){
        if($request->filled('search')){
            $data['records'] = Book::where('isbn',$request->search)->get();
        }
        else{
            $data['records'] = Book::all();
        }
        return view('home',$data);
    }

   
    public function create()
    {
        return view('insert');

    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'price'=>'required',
            'isbn'=>'required',
            'cover'=>'required|mimes:png,jpg',
        ]);

        $filename = time(). "." .$request->cover->extension();
        
        $request->cover->move(public_path('images'),$filename);

        Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'description'=> $request->description,
            'price'=> $request->price,
            'isbn'=> $request->isbn,
            'cover'=> $filename,
        ]);
        return redirect()->back();
    }

    
    public function show(Book $book)
    {
        return view('view',['d'=>$book]);
    }

    
    public function edit(Book $book)
    {
        //
        return view('edit',['record'=>$book]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'price'=>'required',
            'isbn'=>'required',
        ]);

        $filename = time(). "." .$request->cover->extension();
        
        $request->cover->move(public_path('images'),$filename);

        Book::find($book->id)->update([
            'title'=> $request->title,
            'author'=> $request->author,
            'description'=> $request->description,
            'price'=> $request->price,
            'isbn'=> $request->isbn,
            'cover'=> $filename,
        ]);
        return redirect()->route("book.index");
    
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back();
        
    }
}
