<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
	use HasFactory;

	protected $guarded = [];

	protected $dates = ['deadline'];

	/**
	 * Get the member associated with the Borrow
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function member()
	{
		return $this->hasOne(Anggota::class, 'id', 'anggota_id');
	}

	/**
	 * Get the book associated with the Borrow
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function book()
	{
		return $this->hasOne(Book::class, 'id', 'book_id');
	}

	/**
	 * Get the status associated with the Borrow
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function status()
	{
		return $this->hasOne(BorrowStatus::class, 'id', 'status_id');
	}
}
