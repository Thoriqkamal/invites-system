<?php

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

//auth
Route::get('/', function () {
    return view('auths.login');
});
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postLogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/restrictedpage', 'AuthController@errorPrivilegePage')->name('restrictedpage');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create', 'SurveyController@index')->name('create')->middleware('checkRole:requestor');
Route::post('/submitsurvey', 'SurveyController@submitSurvey')->name('submitsurvey')->middleware('checkRole:requestor');
Route::get('/updatesurvey/{code}', 'SurveyController@updateSurvey')->name('updatesurvey')->middleware('checkRole:requestor');
Route::post('/submitaddquestion', 'SurveyController@submitAddQuestion')->name('submitaddquestion')->middleware('checkRole:requestor');
Route::post('/submiteditquestion', 'SurveyController@submitEditQuestion')->name('submiteditquestion')->middleware('checkRole:requestor');
Route::post('/getquestiondata', 'SurveyController@getQuestionData')->name('getquestiondata')->middleware('checkRole:requestor');
Route::post('/deletequestiondata', 'SurveyController@deleteQuestionData')->name('deletequestiondata')->middleware('checkRole:requestor');
Route::post('/update_question_order', 'SurveyController@updateQuestionOrder')->name('updateQuestionOrder')->middleware('checkRole:requestor');

Route::get('/viewmonitoring', 'MonitoringController@index')->name('viewmonitoring');
Route::get('/viewsubmitsurvey', 'MonitoringController@submitSurvey')->name('viewsubmitsurvey')->middleware('checkRole:requestor');
Route::get('/viewapprovesurvey', 'MonitoringController@approveSurvey')->name('viewapprovesurvey')->middleware('checkRole:approver');
Route::post('/deletesurvey', 'MonitoringController@ajaxDeleteSurvey')->name('deletesurvey')->middleware('checkRole:requestor');
Route::post('/updatesurveystatus', 'MonitoringController@ajaxUpdateSurvey')->name('updatesurveystatus')->middleware('checkRole:approver,requestor');

Route::get('/aktivasi-survei', 'ScheduleController@index')->name('aktivasi-survei');

Route::get('/log-history-user', 'LogHistoryUserController@index')->name('log-history-user')->middleware('checkRole:admin');
Route::get('/view-log-history/{survey_code}', 'LogHistoryUserController@viewLogHistory')->name('view-log-history')->middleware('checkRole:admin');
Route::get('/history/view/{survey_code}', 'LogHistoryUserController@view')->middleware('checkRole:admin');

Route::get('/viewresponse', 'ResponseController@index')->name('viewresponse')->middleware('checkRole:admin,approver,requestor,viewer');

Route::get('/whitelist-blacklist', 'WhitelistBlackListController@index')->name('whitelist-blacklist');
Route::post('/submit-list', 'WhitelistBlackListController@submitList')->name('submit-list');
Route::post('/submit-import', 'WhitelistBlackListController@submitImport')->name('submit-import');
Route::post('/getChannel', 'WhitelistBlackListController@getChannel')->name('getChannel');
Route::post('/getImportExcel', 'WhitelistBlackListController@getImportExcel')->name('getImportExcel');
Route::post('/channel-update', 'WhitelistBlackListController@updateChannel')->name('channel-update');
Route::post('/whitelist-blacklist-delete', 'WhitelistBlackListController@deleteList')->name('whitelist-blacklist-delete');

Route::get('/whitelist-blacklist-transferred', 'WhitelistBlackListController@ListTransferred')->name('whitelist-blacklist-transferred');
Route::get('/submit-file', 'WhitelistBlackListController@submitFile')->name('submit-file');
Route::post('/config-file', 'WhitelistBlackListController@configFile')->name('config-file');
Route::post('/submit-config', 'WhitelistBlackListController@submitConfig')->name('submit-config');
Route::get('/download-file/{id}','WhitelistBlackListController@downloadFile')->name('download-file');
Route::get('/download-file-defined/{id}','WhitelistBlackListController@downloadFileDefined')->name('download-file-defined');
Route::get('/whitelist-blacklist-defined', 'WhitelistBlackListController@ListDefined')->name('whitelist-blacklist-defined');
Route::post('/save-as', 'WhitelistBlackListController@saveAs')->name('save-as');
Route::post('/submit-save-as', 'WhitelistBlackListController@submitSaveAs')->name('submit-save-as');
Route::get('/auto-delete', 'WhitelistBlackListController@AutoDelete')->name('auto-delete');
Route::get('/broadcast-ota', 'WhitelistBlackListController@BroadcastOtaSurvey')->name('broadcast-ota');
Route::get('/broadcast-sms', 'WhitelistBlackListController@BroadcastSmsSurvey')->name('broadcast-sms');
Route::get('/list-scheduler', 'WhitelistBlackListController@WhitelistBlacklistScheduler')->name('list-scheduler');
Route::post('/get-schedule-date', 'WhitelistBlackListController@getScheduleDate')->name('get-schedule-date');


//Invites System
Route::get('/users', 'UserController@index')->name('users');
Route::post('/submit-users', 'UserController@submitUser')->name('submit-users');
Route::post('/getusers', 'UserController@getUsers')->name('getusers');
Route::post('/users-update', 'UserController@updateUsers')->name('users-update');
Route::post('/users-delete', 'UserController@deleteUsers')->name('users-delete');
Route::post('/getroles', 'UserController@getRoles')->name('getroles');

Route::get('/event-instance', 'EventInstanceController@index')->name('event-instance');
Route::post('/submit-event-instance', 'EventInstanceController@SubmitEventInstance')->name('submit-event-instance');
Route::post('/get-event', 'EventInstanceController@getEvent')->name('get-event');
Route::post('/event-update', 'EventInstanceController@updateEvent')->name('event-update');
Route::post('/event-delete', 'EventInstanceController@deleteEvent')->name('event-delete');

Route::get('/all-participant-list', 'ParticipantListController@index')->name('all-participant-list');
Route::post('/submit-participant-list', 'ParticipantListController@SubmitParticipantList')->name('submit-participant-list');
Route::post('/get-participant', 'ParticipantListController@getParticipant')->name('get-participant');
Route::post('/participant-update', 'ParticipantListController@updateParticipant')->name('participant-update');
Route::post('/participant-delete', 'ParticipantListController@deleteParticipant')->name('participant-delete');

Route::get('/report-event-instance', 'ReportEventInstanceController@index')->name('report-event-instance');
Route::get('/upload-pdf', 'ReportEventInstanceController@upload_pdf')->name('upload-pdf');