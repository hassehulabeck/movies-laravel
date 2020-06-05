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

                    @isset($movie)
                        <h3>{{ $movie->title }}</h3>
                        <p>{{ $movie->year }}</p>

                        <h3>Skådespelare:</h3>
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

 