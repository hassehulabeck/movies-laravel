@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @isset($errors)
                        @foreach ($errors->all() as $message) 
                            <p> {{ $message }}
                        @endforeach
                    @endisset
                    <form action="/movies" method="post">
                    @csrf
                    <label for="title">Titel</label>
                    <input type="text" name="title">
                    <label for="year">År</label>
                    <input type="text" name="year">
                    <input type="submit" value="Lägg till">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 

