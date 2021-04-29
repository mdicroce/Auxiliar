@extends('layouts.app')

@section('content')
<nav class="">
    <form action="" class="">
        <label for="search_movie" class="form-label">Buscar por nombre </label>
        <div class="input-group flex-nowrap">
            <input type="text" class="form-control" name="search_movie">
            <button type="button" name="search_button" class="btn btn-primary" id="movie_button_searcher">
                <i class="bi bi-search"></i>
            </button>
        </div>

    </form>
</nav>
<section class="">


    @isset($movies)
    <article class="">
        
        @foreach ($movies as $movie)
            
            <div class="container " id="movie-container">
                <figure class="figure-img" id=""  >
                    <img class="" id="poster-img" src="{{'https://image.tmdb.org/t/p/w500/' . $movie->poster_path}}" alt="{{"Poster de".$movie->title}}">
                    
                </figure>
                <div class="" id="movie-side-text">
                    
                    <h3 class="" id="movie-title">{{$movie->title}}</h4>
                    <h4 class="" id="movie-subtitle">{{$movie->original_title}}</h6>
                        
                        @foreach ($movie->genres()->get() as $genre)
                        <a class="anchor-button">{{$genre->name}}</a>
                    @endforeach
                    <p class="" id="movie-overview">{{$movie->overview}}</p>
                    
                </div>

            </div>
            @endforeach
    </article>
        
    @endisset

</section>
@endsection
