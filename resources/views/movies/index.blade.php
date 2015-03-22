@extends('movies.master')

@section('body')
  <div class="col-xs-12">
      @foreach($movies as $movie)
        <h2>{{ $movie->title }}</h2>
        <p>{{ $movie->summary }}</p>
      @endforeach   
  </div>
@stop
