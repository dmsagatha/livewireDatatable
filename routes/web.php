<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
  return view('welcome');
}); */

Route::resource('orders', OrderController::class);

// Rimorsoft Online
Route::view('/', 'users.users')->name('users');

// https://www.nicesnippets.com/blog/laravel-livewire-crud-with-bootstrap-modal-example
// Surfside Media - https://www.youtube.com/watch?v=nnK1PdtAX_M
Route::view('/users-modal', 'users-modal.users')->name('usersModal');

// https://laracasts.com/series/guest-spotlight/episodes/3
// Clovo - https://www.youtube.com/watch?v=CBL17MxWi_4
Route::view('/users-table', 'users-table.users')->name('usersTable');