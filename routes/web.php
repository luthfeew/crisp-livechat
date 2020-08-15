<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controller@index');

Route::any('{query}', function () {
    return redirect('/');
});
