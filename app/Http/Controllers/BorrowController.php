<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$borrows = Borrow::all();
		// dd($borrows[0]->member);
		return view('borrow', compact('borrows'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$users = Anggota::all();
		$books = Book::all();
		// dd($books);
		return view('addBorrow', compact('users', 'books'));
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
			'anggota_id' => 'required|exists:anggotas,id',
			'book_id' => 'required|exists:books,id',
		]);

		$borrow = new Borrow($request->except('_token'));
		$borrow->deadline = Carbon::now()->addDays(14);
		$borrow->status_id = 1;
		$borrow->book->update(['status_id' => '2']);
		$borrow->save();
		return redirect()->route('borrow.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Borrow  $borrow
	 * @return \Illuminate\Http\Response
	 */
	public function show(Borrow $borrow)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Borrow  $borrow
	 * @return \Illuminate\Http\Response
	 */
	// public function edit(Borrow $borrow, User $users)
	public function edit(Borrow $borrow)
	{
		// return view('addBorrow', ['borrow' => $borrow]);
		$users = Anggota::all();
		$books = Book::all();
		return view('addBorrow', compact('users', 'books', 'borrow'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Borrow  $borrow
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Borrow $borrow)
	{
		$request->validate([
			'anggota_id' => 'required|exists:anggotas,id',
			'book_id' => 'required|exists:books,id',
		]);

		$borrow->fill($request->all());
		$borrow->save();

		return redirect()->route('borrow.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Borrow  $borrow
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Borrow $borrow)
	{
		$borrow->delete();
		return back();
	}

	public function approve(Borrow $borrow)
	{
		$borrow->status_id = 2;
		$borrow->book->update(['status_id' => '1']);
		$borrow->save();

		return redirect()->route('borrow.index');
	}
}
