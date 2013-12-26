<?php
namespace Fuhton\SimpleAdmin\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleAdmin extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'simple-admin'; }

}