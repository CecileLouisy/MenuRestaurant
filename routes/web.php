<?php

use App\Http\Controllers\DishController;
use Illuminate\Support\Facades\Route;



Route::get("/",[DishController::class,"viewMenu"]);

Route::get("/ajout",[DishController::class,"create"]);
Route::post("/ajout",[DishController::class,"save"]);

Route::get('/details/{id}', [DishController::class,'viewDetails']);

Route::get("/update/{id}",[DishController::class,"update"]);
Route::put("/update/{id}",[DishController::class,"saveUpdate"]);

Route::delete("/delete/{id}",[DishController::class,"delete"]);