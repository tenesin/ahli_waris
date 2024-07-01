<?php

use App\Http\Controllers\Pages\Landing;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');
