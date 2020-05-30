<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $connection = 'pgsql';

    protected $table = 'books';

    protected $fillable = [ 'id',
        'name', 'author'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'id');
    }
}
