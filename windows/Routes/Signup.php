<?php

namespace spoova\windows\Routes;

use DBStatus;
use spoova\core\classes\DB;
use spoova\windows\Frames\UserFrame;
use spoova\windows\Models\Access\AccessModel;
use User;
use Window;

class Signup extends UserFrame {
    
    public function __construct(){

        User::onauto('login', 'home');

        self::preload([ window(':') ], fn() => AccessModel::onSubmit() );

        //self::onCall([ window(':') => fn() => AccessModel::onSignup() ] );

        self::call($this,
            [
                window(':') => 'root'
            ]
        );

    }

    function root() {

        self::load('signup', fn() => compile() );
        
    }

    /**
     * Add name of routes
     *
     * @return void
     */
    public static function addRoutes(array $array = []) : array {

        return [
            // 'routeName' => 'routePath'
        ];

    }

}
