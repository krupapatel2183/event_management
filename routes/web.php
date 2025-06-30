<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin.events');
});

Route::get('/', [EventController::class, 'index'])->name('admin.events');
Route::get('/admin/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::post('/admin/events', [EventController::class, 'store'])->name('admin.events.store');
Route::get('/admin/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
Route::put('/admin/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
Route::delete('/admin/events/{event}', [EventController::class, 'destroy'])->name('admin.events.destroy');
