<?php

use Inertia\Inertia;
use App\Http\Controllers\MatchGameController;


Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/aktuality', function () {
    return Inertia::render('Aktuality');
});

Route::get('/zapasy', [MatchGameController::class, 'index']);


Route::get('/add-match', function () {
    return Inertia::render('AddMatch');
});

Route::post('/add-match', [MatchGameController::class, 'store']);

