<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get/posts', function(){
    return App\Post::all();
})->middleware('auth:api');

// Route::get('clients/posts', function(){
//     return App\Post::all();
// })->middleware('auth:api'); //el middleware client que apenas creamos

// Route::post('clients/posts', function(Request $request){
//     App\Post::create([
//         'title' => $request->input('title'),
//         'body' => $request->input('body')
//     ]);
//     return ['status' => 200];
// })->middleware('client'); //el middleware client que apenas creamos

/**
 * Creamos un grupo de rutas que primero que nada pide que el usuario este autenticado
 * despues verifica que el token enviado pertenesca a get-posts si estos 2 se cumplen
 * pasan al grupo de rutas.
 */
Route::group(['middleware' => ['auth:api', 'scope:get-posts']], function(){
    Route::get('posts', function(){
        return App\Post::all();
    });
});
/**
 * Creamos un grupo de rutas que primero que nada pide que el usuario este autenticado
 * despues verifica que el token enviado pertenesca a get-two-posts si estos 2 se cumplen
 * pasan al grupo de rutas.
 */
Route::group(['middleware' => ['auth:api', 'scope:get-two-posts']], function(){
    Route::get('two-posts', function(){
        return App\Post::limit(2)->get();
    });
});