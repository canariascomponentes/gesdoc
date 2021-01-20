<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
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

 Route::get('/', HomeController::class)->name('home');

// Route::get('documents', [DocumentController::class, 'index'])->name('documents.index');

// Route::get('documents/create', [DocumentController::class, 'create'])->name('documents.create');

// Route::post('documents', [DocumentController::class, 'store'])->name('documents.store'); //creación de documento

// Route::get('documents/show/{id}', [DocumentController::class, 'show'])->name('documents.show');

// Route::get('documents/{id}/edit', [DocumentController::class, 'edit'])->name('documents.edit');
// Route::put('documents/{document}',[DocumentController::class, 'update'])->name('documents.update'); //actualizar registro

// Route::delete('documents/{document}', [DocumentController::class, 'destroy'])->name('documents.destroy'); //eliminar registro


Route::resource('documents', DocumentController::class)->names('documents');
// Route::view('nosotros', 'nosotros')->name('nosotros'); //el metodo view solo lo usaremos para mostrar contenido estatico



//Ejemplo ruta con variables opcionales
/*Route::get('documents/{doc}/{categoria?}', function ($doc, $categoria = null) {
    if($categoria){
        return "";
    } else {
        return "";
    }
});*/


