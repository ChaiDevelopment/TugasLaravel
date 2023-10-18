<?php

use App\Http\Controllers\ProgramController;

// Route::get('/', ProgramController::class);

Route::get('/programs', [ProgramController::class, 'index']);
