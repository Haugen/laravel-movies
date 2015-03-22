<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MoviesController extends Controller {

  /**
   * Hämta alla filmer och skicka dem till en vy.
   */ 
	public function index() {
    return view('movies.index');
  }

  /**
   * Hämta en film, baserat på argumentet $slug, och skicka
   * den till en vy.
   */ 
  public function show($slug) {

  }

}
