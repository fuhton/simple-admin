<?php

/*
  |--------------------------------------------------------------------------
  | Authentication Filters
  |--------------------------------------------------------------------------
  |
  | The following filters are used to verify that the user of the current
  | session is logged into this application. The "basic" filter easily
  | integrates HTTP Basic authentication for quick, simple checking.
  |
*/


\Route::filter('simple-admin', function()
{
    if (\Auth::guest()) {
        return \Redirect::to('/simple-admin/login/');
    }
    if ( \Auth::user()->account_type != "admin" ) {
        return \Redirect::to('/simple-admin/login/');
    }
});