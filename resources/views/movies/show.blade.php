@extends('movies.master')

@section('body')
  <div class="col-xs-12">
      <h2>{{ $movie->title }}</h2>
      <p>{{ $movie->summary }}</p>
  </div>
@stop
