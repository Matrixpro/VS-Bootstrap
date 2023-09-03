<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController;

Route::get('/', [CommunityController::class, 'index']);

Route::get('/filter_locations/{filter_params}', [CommunityController::class, 'filterAndSort']);
