@extends('actors.main')
@section('rubrik', 'Uppdatera skådespelare')
@section('content')

    <form action="/actors/{{ $actor->id }}" method="post">
        {{-- @csrf = Cross sharing Resource Forgery --}}
        @csrf
        @method('put')

        <label for="actorname">Namn</label>
        <input type="text" name="actorname" value="{{ $actor->name }}">
        <label for="birthday">Födelsedag</label>
        <input type="date" name="birthday" value="{{substr($actor->birthday, 0, -9) }}">
        <label for="country">Land</label>
        <input type="text" name="country" value="{{ $actor->country }}">
        <input type="submit" value="Spara">
    </form>
@endsection
