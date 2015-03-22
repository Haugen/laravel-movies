<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;

use Illuminate\Http\Request;

class MoviesController extends Controller {

  /**
   * Hämta alla filmer och skicka dem till en vy.
   */ 
	public function index() {

    $movies = Movie::all();

    return view('movies.index', ['movies' => $movies]);
  }

  /**
   * Hämta en film, baserat på argumentet $slug, och skicka
   * den till en vy.
   */ 
  public function show($slug) {
    
    $movie = Movie::where(['slug' => $slug])->first();

    return view('movies.show', ['movie' => $movie]);
  }

}
