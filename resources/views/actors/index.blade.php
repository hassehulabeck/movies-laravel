@extends('actors.main')
@section('rubrik', 'Skådespelare')
@section('content')
            @isset($message)
                <p> {{ $message }} </p>
            @endisset

            @isset($actors)
                @foreach($actors as $actor)
                    <p><a href="/actors/{{$actor->id}}"> {{ $actor->name }}</a></p>
                @endforeach
            @endisset
    
@endsection
