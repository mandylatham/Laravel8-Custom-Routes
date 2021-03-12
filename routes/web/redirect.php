<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Redirect Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Schema;
use App\Models\System\Redirect;

try {
    if (Schema::hasTable('redirects')) {
        if ($site = site(config('app.base_domain'))) {
            $redirects = $site->redirects()->cursor();

            if ($redirects->count() !== 0) {
                Route::domain(config('app.base_domain'))->group(function () use (&$redirects) {
                    if ($redirects->count() !== 0) {
                        foreach ($redirects as $redirect) {
                             Route::redirect($redirect->path, $redirect->redirect_path, safe_integer($redirect->code));
                        }
                    }
                });
            }
        }
    }
} catch (Exception $e) {
    // ignore
}
