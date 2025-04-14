<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactSubmit;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    //! RACCHIUDERE LA LOGICA (FUNZIONI) - come rispondere alle richieste del client
    public function home()
    {
        return view('welcome');
    }
// contatti
public function contatti(){
    return view('contatti');
}


    // dependency injection
    public function contactSubmit(Request $request){

        $name =  $request->input('nome');
        $mail =  $request->input('email');
        $informazioni =  $request->info;
    

        
        Mail::to($mail)->send(new ContactMail());
        return redirect(route('homepage'))->with('emailSent', 'E-mail inviata con successo');
}


// dettagli
public function dettagli(){
    return view('components.dettagli');
}



public function animeGenres(){
    $genres = Http::get ('https://api.jikan.moe/v4/genres/anime')->json();
    
    return view('anime.animeGenres', ['genres'=>$genres['data']]);
}
public function index($genre_id, $genre_name){
    $animes = Http::get('https://api.jikan.moe/v4/anime/{id}', ['genres'=>$genre_id])->json();
$animes = Arr::map($animes['data'], function($anime){
    return[
    'id'=>$anime['mal_id'],
    'image'=>$anime['images']['jpg']['large_image_url'],
    'title'=>$anime['title_english'],
    'year'=>$anime['year'], 
    'synopsis'=>$anime['synopsis']
    ];
    });
return view('anime.list', ['animes'=>$animes, 'genre_name'=>$genre_name, 'genre_id'=>$genre_id]);
}

public function show($anime_id){
    $anime = Http::get('https://api.jikan.moe/v4/anime/' . $anime_id)->json();
    return view('anime.show', ['anime'=>$anime['data']]);
}
}

