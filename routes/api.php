<?php

use Illuminate\Http\Request;
// use DB;
// use App\Question;

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

Route::post('login', 'API\PassportController@login');
Route::post('register', 'API\PassportController@register');
Route::group(['middleware' => 'Auth::api'], function () {
});

Route::get('/question/{id}', function ($id) {
    $data = \DB::table('questions')->where('user_id', $id)->get();
    return response()->json($data);
});






