@extends('layouts.app')

@section('page-title', 'Home page')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 p-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->nationality }} - {{ $movie->date }}</p>
                            <p>voto: {{ $movie->vote }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
