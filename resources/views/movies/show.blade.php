@extends('master')

@section('body')
  <div class="col-xs-12">
      <h2>{{ $movie->title }}</h2>
      <p>{{ $movie->summary }}</p>
      <a href="{{ action('MoviesController@index') }}">Tillbaka</a>
  </div>
@stop
