<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/category/{id}', [BookController::class, 'showByCategory'])->name('category.show');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');

Route::get('/books', function(){
$books = DB::table('books')
    ->join('categories', 'category_id', '=', 'categories.id')
    ->get();
    return $books;
});
