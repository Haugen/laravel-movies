<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

  /**
   * Dessa kolumner i vår tabell "movies" är OK att
   * massuppdatera.
   */
	protected $fillable = [
    'title',
    'slug',
    'summary',
  ];

}
