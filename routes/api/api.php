<?php

declare(strict_types=1);

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$routes = [

];

Route::domain(config('app.admin_domain'))->name('api.')->group(function () use (&$routes) {

    if (filled($routes)) {
        foreach ($routes as $index => $route) {
            create_route($route['path'], $route);
        }
    }

    // Catch All Route
    Route::any('{any}', function () {
        abort(404);
    })->where('any', '.*')->middleware('force.https');
});
