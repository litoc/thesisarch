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
// Main site

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin site
Auth::routes();
Route::get('/admin/login', 'Auth\LoginController@showLoginForm')
  ->name('adminLogin');
Route::post('/admin/login', 'Auth\LoginController@login')
  ->name('adminLogin');
Route::get('/admin/logout', 'Auth\LoginController@logout')
  ->name('adminLogout');

Route::group([
  'namespace' => 'Admin',
  'middleware' => ['auth'],
  'prefix' => 'admin',
], function () {

    Route::get('/dashboard', [
        'as' => 'dashboard',
        'uses' => 'DashboardController@index',
    ]);

    # Announcement
    Route::get('/announcement', [
        'as' => 'announcement',
        'uses' => 'AnnouncementController@index',
    ]);

    Route::get('/announcement/create', [
        'as' => 'create-announcement',
        'uses' => 'AnnouncementController@create',
    ]);

    Route::post('/announcement/create', [
        'as' => 'create-announcement',
        'uses' => 'AnnouncementController@create',
    ]);

    # Thesis
    Route::get('/thesis', [
        'as' => 'thesis',
        'uses' => 'ThesisController@index',
    ]);

    Route::get('/thesis/create', [
        'as' => 'create-thesis',
        'uses' => 'ThesisController@create',
    ]);

    Route::post('/thesis/save', [
        'as' => 'save-thesis',
        'uses' => 'ThesisController@save',
    ]);

    Route::get('/thesis/update/{id}', [
        'as' => 'update-thesis',
        'uses' => 'ThesisController@update',
    ]);

    Route::post('/thesis/updatesave/{id}', [
        'as' => 'update-save-thesis',
        'uses' => 'ThesisController@updateSave',
    ]);

    # Download template file to import new thesis
    Route::get('/thesis/downloadSampleFile/{type}', [
        'as' => 'download-sample-file',
        'uses' => 'ThesisController@downloadSampleFile',
    ]);

    # Import new thesis
    Route::post('/thesis/bulkUpload', [
        'as' => 'import-new-thesis',
        'uses' => 'ThesisController@bulkUpload',
    ]);

    # Upload new pictures
    Route::post('/thesis/imageUpload', [
        'as' => 'upload-new-images',
        'uses' => 'ThesisController@imageUpload',
    ]);

    Route::post('/thesis/create', [
        'as' => 'create-thesis',
        'uses' => 'ThesisController@create',
    ]);
});