@extends('layouts.app')

@section('head')
    <style>
        .links>a {
            color: #636b6f;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>

@endsection

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

                    You are logged in!

                    <div class="links">
                    <a href="/movies">Movies</a><br>
                    <a href="/actors">Actors</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
