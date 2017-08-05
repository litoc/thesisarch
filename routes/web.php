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

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/attachments/{filename}', function ($filename)
{
    $path = storage_path() . '/app/attachments/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::get('/privacy', [
    'as' => 'show-privacy',
    'uses' => 'HomeController@showPrivacy',
]);

Route::get('/terms', [
    'as' => 'show-terms',
    'uses' => 'HomeController@showTerms',
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
]);

Route::get('/admin/login', [
    'as' => 'admin-login',
    'uses' => 'Auth\LoginController@showLoginForm',
]);

Route::post('subscribe', [
    'as' => 'student-registration',
    'uses' => 'StudentController@register',
]);

Route::post('student/login', [
    'as' => 'student-login',
    'uses' => 'StudentController@login',
]);

Route::get('student/thesis/category/{id?}', [
    'as' => 'student-thesis',
    'uses' => 'StudentController@getThesisByCategory',
]);

// Admin site
Auth::routes();
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


    Route::get('/announcement/toggle/{id}', [
        'as' => 'toggle-announcement',
        'uses' => 'AnnouncementController@toggleAnnouncement',
    ]);

    Route::get('/announcement/deleteattach/{id}', [
        'as' => 'remove-attachment',
        'uses' => 'AnnouncementController@deleteAttachment',
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

    Route::post('/thesis/search', [
        'as' => 'search-thesis',
        'uses' => 'ThesisController@search',
    ]);
});
