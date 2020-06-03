@extends ('layouts.app')

@section ('content')

<form action="/movies" method="post">
@csrf
<label for="title">Titel</label>
<input type="text" name="title">
<label for="year">År</label>
<input type="text" name="year">
<input type="submit" value="Lägg till">
</form>