<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
	{
		// $admins = User::all();
		// compact('admins')
		$book_count = Book::count();
		$member_count = Anggota::count();
		$admin_count = User::count();
		$borrows = Borrow::all();

		return view('dashboard', compact('book_count', 'member_count', 'admin_count', 'borrows'));
	}
}
