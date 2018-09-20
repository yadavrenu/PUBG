<?php



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
//    return $request->user();
});

//Use App\Player;
 
// Route::get('players', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return Player::all();
// });
 
// Route::get('players/{id}', function($id) {
//     return Player::find($id);
// });

// Route::post('players', function(Request $request) {
//     return Player::create($request->all);
// });

// Route::put('players/{id}', function(Request $request, $id) {
//     $player = Player::findOrFail($id);
//     $player->update($request->all());

//     return $player;
// });

// Route::delete('players/{id}', function($id) {
//     Player::find($id)->delete();

//     return 204;
// });

Route::get('players', 'PlayerController@index');
Route::get('players/{player}', 'PlayerController@show');
Route::post('players', 'PlayerController@store');
Route::put('players/{player}', 'PlayerController@update');
Route::delete('players/{player}', 'PlayerController@delete');