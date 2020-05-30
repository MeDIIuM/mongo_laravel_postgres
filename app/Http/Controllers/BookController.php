<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use App\Review;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $book = Book::all();
        return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->get('name');
        $book->author = $request->get('author');
        $book->save();
        return redirect('book')->with('success','Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
    	$book = Book::where('id', $id)->first();
        $reviews = Review::where('id_book',$id)->get();
		return view('book.show', compact('book', 'id', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();
        return view('book.edit',compact('book','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
		$book = Book::where('id', $id)->first();
        $book->name = $request->get('name');
        $book->author = $request->get('author');
        $book->save();
		return redirect('book')->with('success', 'Book has been successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $book = Book::where('id', $id)->first();
        $book->delete();
        return redirect()->route('book.index')
                        ->with('success','book deleted successfully');
    }
}
