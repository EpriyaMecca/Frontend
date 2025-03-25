<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/task', function () {
    return view('tasks.index');
});
Route::get('/task/create', function () {
    return view('tasks.create');
});
Route::get('/task/edit', function () {
    return view('tasks.edit');
});
Route::get('/completed', function () {
    return view('completed');
});
