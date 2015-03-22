@extends('master')

@section('body')
  <div class="col-xs-12">
      @foreach($movies as $movie)
        <h2>
          <a href="{{ action('MoviesController@show', [$movie->slug]) }}"> {{ $movie->title }}</a>
        </h2>
        <p>{{ $movie->summary }}</p>
      @endforeach   
  </div>
@stop
