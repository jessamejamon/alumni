<?php

use App\livewire\Auth\AuthLogin;
use App\livewire\Auth\AuthRegister;
use App\livewire\Auth\AuthHomepage;
use App\livewire\Auth\AuthDashboard;
use App\livewire\Auth\AuthContactUs;
use App\livewire\Auth\AuthAboutUs;
use App\livewire\Auth\AuthForm;
use App\livewire\Auth\Authevents;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name ('login');
Route::get('/register', AuthRegister::class)->name ('register');
Route::get('/homepage', AuthHomepage::class)->name ('homepage');
Route::get('/dashboard', AuthDashboard::class)->name ('dashboard');
Route::get('/contactus', Authcontactus::class)->name ('contactus');
Route::get('/aboutus', Authaboutus::class)->name ('aboutus');
Route::get('/form', Authform::class)->name ('form');
Route::get('/events', Authevents::class)->name ('events');

