<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ticketkController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building y  our API!
|
*/

Route::get('version', function () {
    return response()->json(['version' => config('app.version')]);
});

// Route::put('editar',[ticketkController::class, 'update']);
// Route::get('eliminar/{id}',[ticketkController::class,'destroy']);
// Route::get('ticket',[ticketkController::class,'show']);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    Log::debug('User:' . serialize($request->user()));
    return $request->user();
});

    Route::namespace('App\\Http\\Controllers\\API\V1')->group(function () {
    Route::get('profile', 'ProfileController@profile');
    Route::put('profile', 'ProfileController@updateProfile');
    // Route::put('editar_cliente{id}{',ClienteController::class,'edit');
    Route::post('change-password', 'ProfileController@changePassword');
    Route::get('tag/list', 'TagController@list');
    Route::get('category/list', 'CategoryController@list');
    Route::post('product/upload', 'ProductController@upload');
    Route::post('tickets',[ticketkController::class,'store']);
    Route::post('clientes',[ClienteController::class,'store']); 
    Route::get('mostrar-clientes',[ClienteController::class,'index']); 
    Route::get('mostrar',[ticketkController::class,'index']);
    Route::delete('eliminarcliente/{id}',[ClienteController::class,'destroy']);
    // Route::post('editartickets/{id}',[ticketkController::class,'edit']);
    Route::delete('eliminar/{id}',[ticketkController::class,'destroy']);
    Route::get('listarcliente/{id}',[ClienteController::class,'buscarClientes']);
    Route::get('listartickets/{id}',[ticketkController::class,'buscarTickets']);
    Route::put('actualizar_cliente',[ClienteController::class,'update']);
    Route::put('actualizar_tickets',[ticketkController::class,'update']);
   
   

    
        Route::apiResources([
        'user' => 'UserController',
        'product' => 'ProductController',
        'category' => 'CategoryController',
        'tag' => 'TagController',
        
       

    ]);
});
