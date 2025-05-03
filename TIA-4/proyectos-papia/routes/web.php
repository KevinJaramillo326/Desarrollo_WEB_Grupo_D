<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

Route::resource('proyectos', ProyectoController::class);
