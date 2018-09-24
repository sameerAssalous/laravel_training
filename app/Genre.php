<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    public function films()
    {
        return $this->belongsToMany('App\Film', 'film_genre', 'genre_id', 'film_id');
    } 
}
