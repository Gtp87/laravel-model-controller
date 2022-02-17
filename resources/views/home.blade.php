@extends('layouts.base')

@section('content')
<div class="container-fluid d-flex flex-wrap justify-content-center">
    @foreach ($movies as $movie)
        <div class="card w-25 m-3 p-3 bg-light">
            <h1>Title: {{$movie->title}}</h1>
            <h3>Original Title: {{$movie->original_title}}</h3>
            <h5>Nation: {{$movie->nationality}}</h5>
            <h5>Date: {{$movie->date}}</h5>
            <h5>Vote: {{$movie->vote}}</h5>
        </div>   
    @endforeach
</div>
    
@endsection