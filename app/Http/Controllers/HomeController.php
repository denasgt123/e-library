<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$books = Book::all();
		return view('landing', compact('books'));
	}

	public function search(Request $request)
	{
		$keyword = $request->keyword;
		$books = Book::where('title', 'like', '%' . $keyword . '%')
			->orWhere('creator', 'like', '%' . $keyword . '%')
			->orWhere('publisher', 'like', '%' . $keyword . '%')
			->orWhere('publish_date', 'like', '%' . $keyword . '%')
			->orWhere('location', 'like', '%' . $keyword . '%')->get();

		return view('search', compact('books', 'keyword'));
	}
}
