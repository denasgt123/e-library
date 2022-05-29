<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$anggotas = Anggota::all();
		return view('anggota', compact('anggotas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('addAnggota');
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
			'nik' => 'required|numeric',
			'name' => 'required',
			'dpob' => 'required',
			'gender' => 'required',
			'blood_type' => 'required',
			'address' => 'required',
			'religion' => 'required',
			'job' => 'required',
			'nationality' => 'required',
		]);

		$member = new Anggota($request->all());
		$member->save();

		return redirect()->route('member.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Anggota  $anggota
	 * @return \Illuminate\Http\Response
	 */
	public function show(Anggota $anggota)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Anggota  $anggota
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Anggota $member)
	{
		return view('addAnggota', ['anggota' => $member]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Anggota  $anggota
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Anggota $member)
	{
		$request->validate([
			'nik' => 'required|numeric',
			'name' => 'required',
			'dpob' => 'required',
			'city' => 'required',
			'gender' => 'required',
			'blood_type' => 'required|max:3',
			'address' => 'required',
			'religion' => 'required',
			'is_married' => 'required',
			'job' => 'required',
			'nationality' => 'required',
		]);

		$member->fill($request->all());
		$member->save();

		return redirect()->route('member.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Anggota  $anggota
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Anggota $member)
	{
		// dd($member);
		$member->delete();
		return back();
	}
}
