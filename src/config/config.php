<?php

return array(

    'site_config' => array(
        'site_name'   => 'Simple Admin',
        'title'       => 'Simple Admin Panel',
        'description' => 'Laravel 4 Admin Panel'
    ),

    //menu 2 type are available single or dropdown and it must be a route
    'menu' => array(
        'Dashboard' => array('type' => 'single', 'route' => 'admin.home'),
        'Users'     => array('type' => 'dropdown', 'links' => array(
            'Manage Users' => array('route' => 'admin.users.index'),
            'Groups'       => array('route' => 'admin.groups.index'),
            'Permissions'  => array('route' => 'admin.permissions.index')
        )),
    ),

    'views' => array(

        'layout' => 'simple-admin::layouts',

        'dashboard' => 'simple-admin::dashboard.index',
        'login'     => 'simple-admin::dashboard.login',
        'user'  => 'simple-admin::dashboard.user',

    ),
);
