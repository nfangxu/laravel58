<?php

use Illuminate\Support\Facades\Route;

Route::namespace('FxAdmin\\Http\\Controllers')
	->prefix('fx-admin')
	->as('fx-admin.')
	->group(function () {
		Route::get('/', "FxAdminController@index")->name('home');
		Route::get('dashboard', "FxAdminController@dashboard")->name('dashboard');
	});
