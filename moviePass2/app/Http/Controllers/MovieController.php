<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\genre_movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiController;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $apiController;
    public function __construct()
    {
        $this->apiController = new ApiController();
    }
    public function index()
    {
        $movies = Movie::all();

        return view('showmovies', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->genreCreate();
        $jsonResults = $this->apiController->index();
        foreach ($jsonResults as $key => $actualRequest) {
            $actualRequestJson = $actualRequest->getBody()->getContents();
            $array = ($actualRequestJson) ? json_decode($actualRequestJson, true) : array();
            foreach ($array["results"] as $movie) {
                $newMovie = new Movie();
                $newMovie->id = $movie["id"];
                $newMovie->title = $movie["title"];
                $newMovie->original_title = $movie["original_title"];
                $newMovie->release_date = $movie["release_date"];
                $newMovie->poster_path = $movie["poster_path"];
                $newMovie->overview = $movie["overview"];
                $newMovie->original_language = $movie["original_language"];
                
                try {
                    
                    foreach ($movie["genre_ids"] as $genres) {
                        $newMovie->genres()->attach($genres);
                    }
                    $newMovie->save();
                } catch (\Throwable $th) {
                }
                
                
            }
            
        }
        
    }
    public function genreCreate()
    {
        $jsonResults = $this->apiController->genreIndex()->getBody()->getContents();
        $array = ($jsonResults) ? json_decode($jsonResults, true) : array();
        foreach ($array["genres"] as $value) {
            $newGenre = new Genre();
            $newGenre->id = $value["id"];
            $newGenre->name = $value["name"];
            try {
                $newGenre->save();
            } catch (\Throwable $th) {
            }
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $movie = Movie::where('id', $id)->get();

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
