<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$books = Book::all();
		return view('book', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('addBook');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'title' => 'required',
			'creator' => 'required',
			'publisher' => 'required',
			'publish_date' => 'required',
			'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'location' => 'required',
		]);


		$book = new Book($request->except('cover'));
		if ($request->hasFile('cover')) {
			$cover = $request->file('cover');
			$name = $cover->getClientOriginalName() . '_' . time() . '.' . $cover->getClientOriginalExtension();
			$path = $cover->storePubliclyAs('public/cover', $name);
			$book->photo = $name;
		}
		$book->save();

		return redirect()->route('book.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function show(Book $book)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Book $book)
	{
		return view('addBook', ['book' => $book]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Book $book)
	{
		$request->validate([
			'title' => 'required',
			'creator' => 'required',
			'publisher' => 'required',
			'publish_date' => 'required',
			'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'location' => 'required',
		]);

		$book->fill($request->except('cover'));
		if ($request->hasFile('cover')) {

			if ($book->photo != 'myBook.jpg') {
				Storage::delete('public/cover/' . $book->photo);
			}
			// dd($request);
			$cover = $request->file('cover');
			$name = $cover->getClientOriginalName() . '_' . time() . '.' . $cover->getClientOriginalExtension();
			$path = $cover->storePubliclyAs('public/cover', $name);
			$book->photo = $name;
		}

		$book->save();

		return redirect()->route('book.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Book  $book
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Book $book)
	{
		if ($book->photo != 'myBook.jpg') {
			Storage::delete('public/cover/' . $book->photo);
		}
		$book->delete();
		return back();
	}
}
