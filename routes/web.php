<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ChordController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::controller(ChordController::class)->group(function () {
    Route::get('/chords', 'viewChordsOverview')->name('chordsOverview');
    Route::get('/chords/info/{id}','viewChordInfo')->name('chordInfo');

    Route::get('/chords/create','viewChordCreator')->name('chordCreator');

    Route::get('/chords/edit/{id}','viewChordEditor')->name('chordEditor');
    
    Route::post('/chords/create','handleCreateChord')->name('chord.create');
    Route::post('/chords/edit','handleUpdateChord')->name('chord.edit');
    Route::post('/chords/delete','handleDeleteChord')->name('chord.delete');
});

Route::controller(SongController::class)->group(function () {
    Route::get('/songs', 'viewSongsOverview')->name('songsOverview');
    Route::get('/songs/info/{id}','viewSongInfo')->name('songInfo');

    Route::get('/songs/create','viewSongCreator')->name('songCreator');

    Route::get('/songs/edit/{id}','viewSongEditor')->name('songEditor');
    
    Route::post('/songs/create','handleCreateSong')->name('song.create');
    Route::post('/songs/edit','handleUpdateSong')->name('song.edit');
    Route::post('/songs/delete','handleDeleteSong')->name('song.delete');
});
