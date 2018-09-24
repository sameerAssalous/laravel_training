<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['film_id', 'name','email','body'];

    /**
     * Get the film of the comment.
     */
    public function film()
    {
        return $this->belongsTo(Film::class);
    }    
}
