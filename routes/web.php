<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
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
    return view('welcome');
});
Route::get('tests', function () {
    return view('welcome');
});
Route::get('tests/1', function () {
    return view('welcome');
});
Route::get('tests/10', function () {
    return view('welcome');
});
Route::get('tests/{id}', function ($id) {
    return view('welcome');
});
Route::get('users', function () {
    return 'pages des utilisateurs';
});

//modif partie B
Route::get('user/{name}', function ($name) {
    return view('user',['user'=>$name]);
})->whereAlpha('name');

Route::get('users/{name}/kids', function () {
    return 'page de utilisateur';
});

Route::get('user/{name}/kids/{namekid}', function ($name, $namekid) {
    return view('kid',['nom'=>$name, 'nomkid'=>$namekid]);
})->whereAlpha('name', 'namekid');
//------------------------------------------------------------------------

Route::delete('kids', function () {
    return view('welcome');
});
Route::put('kids', function () {
    return view('welcome');
});
Route::patch('kids', function () {
    return view('welcome');
});
Route::get('kids', function () {
    return view('welcome');
}); 
//-------------partie C---------------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});
//LA ROUTE SOMMAIRE SUPPLANTE WELCOME
//Route::get('/', function () {
//    return view('sommaire');
//});
//---------------partie D-----------------------------------------------------------
Route::get('sommaire', function () {
    return 'SOMMAIRE';
});
Route::get('plan', function () {
    return redirect('plan', 'sommaire');
});
//code 301?
Route::get('plan2', function () {
    return redirect('sommaire', 301);
});

//---------------------Partie F prefixe -------------------------------------------
Route::prefix('admin')->group(function(){
    Route::get('users', function(){
        return 'page admin';
    });
    Route::get('posts', function(){
        return 'page admin';
    });
    Route::get('comments', function(){
        return 'page admin';
    });
    Route::get('plan', function(){
        return 'page admin';
    });
}); 
//-----------------------Partie E fallback---------------------------------------
Route::fallback(function() {
    return 'HELLO DELU ?';
});
//-------------------------------------------------------------------------------
Route::get('presentation', function () {
    return view('presentation');
});
Route::get('vueApropos', function () {
    return view('vueApropos');
});
//------------------------------------------------------------------------------
Route::get('page1', [ProjetController::class, 'index']);
Route::get('page2/{bla}', [ProjetController::class, 'test']);
//------------------------------------------------------------------------------
//-------------------------DEBUT DU CRUD POST----------------------------------------

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/store', [PostController::class, 'store'])->name("posts.store");
Route::get('posts/{id}', [PostController::class, 'show'])->name("posts.show");
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name("posts.edit");
Route::post('posts/{id}/update', [PostController::class, 'update'])->name("posts.update");
Route::get('posts/{id}/delete', [PostController::class, 'destroy'])->name("posts.delete");

//-------------------------DEBUT DU CRUD LIVRE----------------------------------------


Route::get('livres', [LivreController::class, 'index']);
Route::get('livres/create', [LivreController::class, 'create'])->name("livres.create");
Route::get('livres/store', [LivreController::class, 'store'])->name("livres.store");
Route::get('livres/{id}', [LivreController::class, 'show'])->name("livres.show");
Route::get('livres/{id}/edit', [LivreController::class, 'edit'])->name("livres.edit");
Route::post('livres/{id}/update', [LivreController::class, 'update'])->name("livres.update");
Route::get('livres/{id}/delete', [LivreController::class, 'destroy'])->name("livres.delete");
