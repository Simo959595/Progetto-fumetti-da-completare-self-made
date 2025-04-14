<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
// ROTTA PER HOMEPAGE
Route::get('/', [PublicController::class, 'home'])->name('homepage');
// ROTTA PER CARDS
Route::get('/card', [PublicController::class, 'card'])->name('card');
Route::get('/dettagli', [PublicController::class, 'dettagli'])->name('dettagli');
// ROTTE PER CONTATTI
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');
Route::post('/contatti/invio', [PublicController::class, 'contactSubmit'])->name('invio.contatti');
// ROTTA PER ANIME
Route::get('/anime/genres', [PublicController::class, 'animeGenres'])->name('animeGenres');
// ROTTA PER ANIME (ID)
Route::get('/anime/index/genre/{genre_id}/{genre_name}', [PublicController::class, 'index'])->name('anime.index');
// ROTTA PER ANIME (DETTAGLI)
Route::get('/anime/detail/{anime_id}', [PublicController::class, 'show'])->name('anime.show');
// ROTTA PER MANGA
Route::get('/manga', [PublicController::class, 'mangaGenres'])->name('mangaGenres');
