<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebScrapperController;

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
    $urls = \AshAllenDesign\ShortURL\Models\ShortURL::latest()->get();
    return view('welcome', compact('urls'));
});

Route::post('/', function () {
    $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

    $shortURLObject = $builder->destinationUrl(request()->url)->make();
    $shortURL = $shortURLObject->default_short_url;

    return back()->with('success','URL shortened successfully. ');

})->name('url.shorten');

Route::post('{id}', function ($id) {
    $url = \AshAllenDesign\ShortURL\Models\ShortURL::find($id);
    $url->url_key = request()->url;
    $url->destination_url = request()->destination;
    $url->save();

    return back()->with('success','URL updated successfully. ');
})->name('update');


Route::get('home', [WebScrapperController::class, 'index']);
Route::get('/', function() {
    return view('welcome');
});
