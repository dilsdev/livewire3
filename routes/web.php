<?php

use Illuminate\Support\Facades\Route;

//posts index
Route::get('/', App\Livewire\Posts\Index::class)->name('posts.index');

//posts create
Route::get('/create', App\Livewire\Posts\Create::class)->name('posts.create');

//posts edit
Route::get('/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');
