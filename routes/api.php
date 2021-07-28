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

Route::post('/tnps','MyTselApiController@tnps_api');

Route::get('/allparticipant/{id}/{event_instance}', 'ParticipantListController@getAllParticipant');
Route::get('/activeparticipant/{id}/{event_instance}', 'ParticipantListController@getActiveParticipant');
Route::get('/pendingparticipant', 'ParticipantListController@getPendingParticipant');
Route::get('/single-pendingparticipant/{id}/{event_instance}', 'ParticipantListController@getSinglePendingParticipant');
Route::post('/activetime', 'ParticipantListController@updateActiveTime');