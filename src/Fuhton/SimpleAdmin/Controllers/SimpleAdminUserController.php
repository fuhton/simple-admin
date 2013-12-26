<?php

namespace Fuhton\SimpleAdmin\Controllers;

use View;
use Config;
use Fuhton\SimpleAdmin\SimpleAdminUser;

class SimpleAdminUserController extends BaseController {

    /**
     * Show the dashboard
     *
     * @return Response
     */
    public function getIndex()
    {
        return View::make(Config::get('simple-admin::views.login') );
    }

    /**
     * Login the user
     *
     * @return Response
     */
    public function postIndex()
    {
        $username = \Input::get('username');
        $password = \Input::get('password');

        $input = array(
            'username' => $username,
            'password' => $password,
            'account_type' => 'admin'
        );
        $rules = array(
            'username' => 'required',
            'password' => 'required',
            'account_type' => 'required'
        );

        $validation = \Validator::make($input, $rules);

        if( $validation->fails() ) {
            return \Redirect::to('/simple-admin/login')->withErrors($validation)->withInput();
        }

        if( \Auth::attempt($input)) {
            \Session::flash('status_success', 'You have logged in successfully.');
            return \Redirect::to('/simple-admin');
        } else {
            \Session::flash('status_error', 'Your username or password is invalid - please try again.');
            return \Redirect::to('/simple-admin/login')->withInput();
        }


    }

    public function getUser()
    {

        $user = \Auth::user();
        return View::make(Config::get('simple-admin::views.user'), array('user' => $user) );
    }

    public function postUser()
    {

        $id = \Input::get('id');
        $username = \Input::get('username');
        $password = \Input::get('password');
        $re_password = \Input::get('reenter_password');
        $email = \Input::get('email');

        $input = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'email' => $email,
        );
        $rules = array(
            'id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required | email'
        );

        $validation = \Validator::make($input, $rules);


        if( $validation->fails() ) {
            return \Redirect::to('/simple-admin/edit-user')->withErrors($validation);
        }

        if( $password != $re_password ) {
            \Session::flash('status_error', 'Please make sure passwords match' );
            return \Redirect::to('/simple-admin/edit-user');
        }

        $affectedRows = \DB::table('users')->where('id', '=', $id)->update(array('username' => $username, 'password' => \Hash::make($password), 'email' => $email));

        $user = \Auth::user();
        return View::make(Config::get('simple-admin::views.user'), array('user' => $user) );
    }

    /**
     * Show the dashboard
     *
     * @return Response
     */
    public function getLogout()
    {
        \Auth::logout();
        return \Redirect::to('/simple-admin/login/');
    }
}