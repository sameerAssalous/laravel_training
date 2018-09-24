<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $fillable = ['name', 'description','release_date','rating','ticket_price','country','photo'];

    /**
     * Get all of the comments for the film.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }    
    /**
     * Get genres of the film.
     */    
    public function genres()
    {
        return $this->belongsToMany('App\Genre', 'film_genre', 'film_id', 'genre_id');
    }    
}
