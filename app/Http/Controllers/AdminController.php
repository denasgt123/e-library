<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$admins = User::where('role_id', '!=', 1)->get();
		// dd($admins);
		return view('admin', compact('admins'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('addAdmin');
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
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8|confirmed',
		]);

		$user = new User($request->except(['_token', 'password', 'password_confirmation']));
		$user->password = Hash::make($request->password);
		$user->role_id = 2;
		$user->save();

		return redirect()->route('admin.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('addAdmin', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'password' => 'nullable|min:8|confirmed',
		]);

		$user = User::findOrFail($id);

		$user->fill($request->except(['_token', 'password', 'password_confirmation']));

		if ($request->password) {
			$user->password = Hash::make($request->password);
		}
		$user->save();

		return redirect()->route('admin.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		User::findOrFail($id)->delete();
		return back();
	}
}
