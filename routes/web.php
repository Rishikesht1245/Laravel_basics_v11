<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\welcomeController;
use App\Http\Controllers\NoteController;

/* we need to mention the class name and method to
 invoke as an array */
Route::get('/', [welcomeController::class, "welcome"])->name("welcome");

// Route::get("/note", [NoteController::class, "index"])->name("note.index");
// Route::get("/note/create", [NoteController::class, "create"])->name("note.create");
// Route::post("/note", [NoteController::class, "store"])->name("note.store");
// Route::get("/note/{id}", [NoteController::class, "show"])->name("note.show");
// Route::get("/note/{id}/edit", [NoteController::class, "edit"])->name("note.edit");
// Route::put("/note/{id}", [NoteController::class, "update"])->name("note.update");
// Route::delete("/note/{id}", [NoteController::class, "destroy"])->name("note.destroy");

// or we can also use the below instead of the above 7 routes
Route::resource('note', NoteController::class);