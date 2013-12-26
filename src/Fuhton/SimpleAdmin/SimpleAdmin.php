<?php

namespace Fuhton\SimpleAdmin;

class SimpleAdmin extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'simple_admin';


    /**
     * The main function called by this class
     *
     * @var string
     */
    public function content( $name )
        {
            $content = \DB::table( 'simple_admin' )->where( 'name', $name )->get();
            if ($content) {
                return $content[0]->content;
            } else {
                return "This is default content. Most likely your names for Simple Admin are not correct";
            }
        }

}