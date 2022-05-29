<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	use HasFactory;

	protected $guarded = [];

	/**
	 * Get the status associated with the Book
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function status()
	{
		return $this->hasOne(BookStatus::class, 'id', 'status_id');
	}
}
