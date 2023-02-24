<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductLinesController;

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

Route::get('/', function (Request $request) {
    return view('pages.home', ['title' => 'Accueil']);
})->name ('home');

Route::get('/categories', [ProductLinesController::class, 'list'])->name('categories');

Route::get('/category/{name}', [ProductLinesController::class, 'show'])->name('category');

Route::get('/about', function (Request $request) {
    return view('pages.about');
})->name('about');

Route::get('/model/{code}', [ProductController::class, 'show'])->name('model');

Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::post('/search', [ProductController::class, 'searchResults'])->name('searchResults');





Route::get('/tasks', function () {
    return view('tasks', ['name' => 'John', "pending" => 10, 'achieved' => 5]);
});

$taskList = [
    'Installer Laravel' => new \DateTime('2023-02-21'),
    'Rendez-vous Antoine' => new \DateTime('2023-02-27')
];

Route::get('/task-list', function(Request $request) use ($taskList)  {
    return view('products', ['name' => 'John', 'tasks' => $taskList]);
});

Route::get('/products', [ProductController::class, 'list'])->name('products');

