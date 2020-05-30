<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Review extends Eloquent
{
	protected $primaryKey = '_id';

	protected $connection = 'mongodb';

    protected $fillable = [
        'rating', 'text', 'id_book'
    ];
    public function book()
	{
	    return $this->belongsTo(Book::class, 'id_book');
	}
}
