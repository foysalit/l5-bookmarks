<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = ['title', 'url'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
