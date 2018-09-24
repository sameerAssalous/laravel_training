<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
class FilmController extends Controller
{
 	public function index()
    {
        return Film::all();
    }

    public function show(Film $film)
    {
        return $film;
    }

    public function store(Request $request)
    {
        $film = Film::create($request->all());

        return response()->json($film, 201);
    }

    public function update(Request $request, Film $film)
    {
        $film->update($request->all());

        return response()->json($film, 200);
    }

    public function delete(Film $film)
    {
        $film->delete();

        return response()->json(null, 204);
    }
	public function showBySlug($slug)
    {
    	$name = str_replace('-',' ', $slug);
        return Film::where('name', $slug)->firstOrFail();
    }
    
}
