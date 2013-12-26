<?php

namespace Fuhton\SimpleAdmin\Controllers;

use View;
use Config;
use Fuhton\SimpleAdmin\SimpleAdmin;

class SimpleAdminController extends BaseController {

    /**
     * Show the dashboard
     *
     * @return Response
     */
    public function index()
    {
        $content = SimpleAdmin::get();
        return View::make(Config::get('simple-admin::views.dashboard'), array( 'content' => $content ) );
    }

    /**
     * Delete a content area
     *
     * @return Response
     */
    public function deleteSimpleAdmin()
    {
        if (\Auth::check()) {
            $id = \Input::get('id');
            $affectedRows = SimpleAdmin::where('id', '=', $id)->delete();

            \Session::flash('status_success', "Content area deleted.");
            return \Redirect::to('/simple-admin');
        } else {
            return View::make(Config::get('simple-admin::views.login') );
        }
    }


    /**
     * Edit Content Area
     *
     * @return Response
     */
    public function editSimpleAdmin()
    {
        if (\Auth::check()) {
            $id = \Input::get('id');
            $name = \Input::get('name');
            $content = \Input::get('content');

            $affectedContent = SimpleAdmin::where('id', '=', $id)->update(array('name' => $name, 'content' => $content));

            \Session::flash('status_success', "Content area updated.");
            return \Redirect::to('/simple-admin');
        } else {
            return View::make(Config::get('simple-admin::views.login') );
        }
    }

    /**
     * Create a new content area
     *
     * @return Response
     */
    public function newSimpleAdmin()
    {
        if (\Auth::check()) {
            $name = \Input::get('name');
            $content = \Input::get('content');

            $simpleAdmin = new SimpleAdmin;
            $simpleAdmin->name = $name;
            $simpleAdmin->content = $content;

            $simpleAdmin->save();

            \Session::flash('status_success', "Content area created.");
            return \Redirect::to('/simple-admin');
        } else {
            return View::make(Config::get('simple-admin::views.login') );
        }
    }
}
