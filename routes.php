<?php
/*
|--------------------------------------------------------------------------
| Cpanel Routes
|--------------------------------------------------------------------------
|
|
 */
//Base Controller
Route::get('/simple-admin', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminController@index')->before('simple-admin');

//User Controller
Route::get('/simple-admin/edit-user', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminUserController@getUser')->before('simple-admin');
Route::post('/simple-admin/edit-user', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminUserController@postUser')->before('simple-admin');

//Login Controller
Route::get('/simple-admin/login', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminUserController@getIndex');
Route::post('/simple-admin/login', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminUserController@postIndex');

//Logout Controller
Route::get('/simple-admin/logout', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminUserController@getLogout');

//Base Content controllers
Route::post('/simple-admin/editSimpleAdmin', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminController@editSimpleAdmin')->before('simple-admin');
Route::post('/simple-admin/deleteSimpleAdmin', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminController@deleteSimpleAdmin')->before('simple-admin');
Route::post('/simple-admin/newSimpleAdmin', 'Fuhton\SimpleAdmin\Controllers\SimpleAdminController@newSimpleAdmin')->before('simple-admin');
