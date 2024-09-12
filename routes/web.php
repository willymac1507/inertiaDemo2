<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Home');
});

Route::get('/users', function () {
  return Inertia::render('Users', [
    'users' => User::query()
      ->when(Request::input('search'), function ($query, $search) {
        $query->where('name', 'like', "%{$search}%");
      })
      ->paginate(10)
      ->withQueryString()
      ->through(fn($user) => [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email
      ]),
    'filters' => Request::only(['search'])
  ]);
});

Route::get('/settings', function () {
  return Inertia::render('Settings');
});

Route::post('/logout', function () {
  dd('Logging out');
});
