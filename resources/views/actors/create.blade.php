@extends('actors.main')
@section('rubrik', 'Lägg till skådespelare')
@section('content')

    <form action="/actors" method="post">
        {{-- @csrf = Cross sharing Resource Forgery --}}
        @csrf 

        <label for="actorname">Namn</label>
        <input type="text" name="actorname">
        <label for="birthday">Födelsedag</label>
        <input type="date" name="birthday">
        <label for="country">Land</label>
        <input type="text" name="country">
        <input type="submit" value="Lägg till">
    </form>

@endsection
