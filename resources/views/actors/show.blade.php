@extends('actors.main')
    @section('rubrik', 'En skådespelare')
    @section('content')
        @isset($actor)
            <h3>{{ $actor->name }}</h3>
            <p>{{ $actor->country }}</p>

            <h3>Har medverkat i:</h3>
            @foreach ($actor->movies as $movie)
                <p>{{ $movie->title }} ({{ $movie->year }})</p>
            @endforeach
        @endisset
    @endsection