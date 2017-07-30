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
  //'middleware' => ['auth'],
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
        'as' => 'save-announcement',
        'uses' => 'AnnouncementController@save',
    ]);

    Route::get('/announcement/modify/{id}', [
        'as' => 'update-announcement',
        'uses' => 'AnnouncementController@update',
    ]);

    Route::post('/announcement/modify/{id}', [
        'as' => 'update-announcement',
        'uses' => 'AnnouncementController@saveUpdate',
    ]);

    Route::get('/announcement/delete/{id}', [
        'as' => 'remove-announcement',
        'uses' => 'AnnouncementController@delete',
    ]);

    # Thesis
    Route::get('/thesis', [
        'as' => 'thesis',
        'uses' => 'ListController@index',
    ]);

    Route::get('/thesis/create', [
        'as' => 'create-thesis',
        'uses' => 'ListController@create',
    ]);

    Route::get('/thesis/update/{id}', [
        'as' => 'update-thesis',
        'uses' => 'ListController@update',
    ]);

    Route::post('/thesis/update/{id}', [
        'as' => 'update-thesis',
        'uses' => 'ListController@update',
    ]);

    # Download template file to import new thesis
    Route::get('/thesis/downloadSampleFile/{type}', [
        'as' => 'download-sample-file',
        'uses' => 'ListController@downloadSampleFile',
    ]);

    # Import new thesis
    Route::post('/thesis/bulkUpload', [
        'as' => 'import-new-thesis',
        'uses' => 'ListController@bulkUpload',
    ]);

    Route::post('/thesis/create', [
        'as' => 'create-thesis',
        'uses' => 'ListController@create',
    ]);
});
