@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @isset($movie)
                        <h2>{{ $movie->title }}</h2>
                        <p>{{ $movie->year }}</p>

                        <h3>Regissör</h3>
                        <p>{{ $movie->director->name}}</p>

                        <h3>Skådespelare</h3>
                        @foreach ($movie->actors as $actor)
                            <p>{{ $actor->name }} ({{ $actor->birthday }})</p>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 