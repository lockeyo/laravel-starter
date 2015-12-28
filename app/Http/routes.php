<?php

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'PageController@index');
Route::get('/features', 'PageController@features');
Route::get('/about', 'PageController@about');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/page/{id}', 'BlogController@page');
Route::get('/blog/{category}', 'BlogController@category');
Route::get('/blog/{category}/page/{id}', 'BlogController@categoryPage');
Route::get('/blog/{category}/{articleName}', 'BlogController@article');
Route::post('/blog/{category}/{articleName}/comment', 'BlogController@comment');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/{jobTitle}', 'JobsController@job');
Route::get('/jobs/{jobTitle}/apply', 'JobsController@apply');
Route::post('/jobs/{jobTitle}/apply', 'JobsController@applyPost');

Route::get('/press', 'PressController@index');
Route::get('/press/download-press-package', 'PressController@download');

Route::get('/support', 'SupportController@index');
Route::get('/support/{category}', 'SupportController@category');
Route::get('/support/{category}/{articleName}', 'SupportController@article');

Route::get('/sitemap', 'PageController@sitemap');
Route::get('/privacy-policy', 'PageController@privacyPolicy');
Route::get('/terms-of-service', 'PageController@termsOfService');
Route::get('/imprint', 'PageController@imprint');

Route::get('/language/change/{locale}', 'LanguageController@change');

/*
|--------------------------------------------------------------------------
|  Report Bugs
|--------------------------------------------------------------------------
*/
Route::post('/bug/submit-report', 'BugController@report');

/*
|--------------------------------------------------------------------------
| Login Routes
|--------------------------------------------------------------------------
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


/*
|--------------------------------------------------------------------------
| Website Routes / User
|--------------------------------------------------------------------------
*/
Route::get('/home', 'UsersController@dashboard');
Route::get('/dashboard', 'UsersController@dashboard');

/*
|--------------------------------------------------------------------------
| Website Routes / Admin User
|--------------------------------------------------------------------------
*/
/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    # Admin Dashboard
    # Route::get('/', 'Admin\DashboardController@index');

    # Users
    #Route::get('users/', 'Admin\UserController@index');
    #Route::get('users/{user}/show', 'Admin\UserController@show');
    #Route::get('users/{user}/edit', 'Admin\UserController@edit');
    #Route::get('users/{user}/delete', 'Admin\UserController@delete');
    #Route::resource('users', 'Admin\UserController');
});

/*
|--------------------------------------------------------------------------
| RSS Routes
|--------------------------------------------------------------------------
*/
Route::get('/rss', 'RssController@index');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::get('/api', 'ApiController@index');
Route::get('/api/{version}', 'ApiController@version');
Route::get('/api/{version}/test', 'ApiController@test');
