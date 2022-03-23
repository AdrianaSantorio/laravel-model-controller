@extends('layouts.main');

@section('content')
<div class="container h-100">    
    <div class="gallery-wrapper h-100">
        <div class="movie-gallery">
            <div class="col">
                <a href="{{route('movies.show', $movie->id)}}">
                    <div class="movie-card">
                        <h4 >{{$movie->title}}</h4>
                        <h5 class="card-title">{{$movie->original_title}}</h5>
                        <small><p class="card-text">{{$movie->date}}</p></small>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i> {{$movie->vote}}
                        </div>
                    </div>
                </a>
                {{-- TODO: sistemare card singole, aggiungere bottone back, separare carta come includes, aggiungere logica ratings --}}
            </div>
        </div>
    </div>
</div>
@endsection