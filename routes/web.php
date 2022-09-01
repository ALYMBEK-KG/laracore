<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('localization/{locale}', function (Request $request, $locale) {
    $localeCodes = array_keys(config('app.locales', ['en' => 'English']));
    if (isset($locale) && in_array($locale, $localeCodes)) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }

    return $request->isJson() ? json_encode(['locale' => $locale]) : redirect()->back();
})->name('localization');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
