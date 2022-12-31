<?php

/**
 * @package core/commands
 * @author Akinola Saheed <teymss@gmail.com> .
 * 
 * This class is for development process. 
 * Warning: The usage of this class will alter installation files. 
 * This may cause app to break or lead to other undesired errors.
 */
namespace spoova\core\commands;

use spoova\core\commands\Cli;

class Add extends Entry{

    private $recompile;

    /**
     * array of arguments
     *
     * @param array $args
     */
    function __construct($args = []) {

        /* 
        add Frame User windows\UserFrame

        add Windows User windows
        */
        if(class_exists('\spoova\core\commands\Make\Mk'.(ucfirst($args[0]??'')))){
            new \spoova\core\commands\MkFile($args);
        } else {
            Cli::textView(Cli::danger(Cli::emo('point-list').' add:'.Cli::warn($args[0]).' ?'));
            Cli::break(2).
            Cli::textView(Cli::error('command "add:'.Cli::warn($args[0]).'" not found'), 2);
            Cli::break(2);
            Cli::textView('Type '.self::mi('info').Cli::warn('add','1').' to see a list of options', 2);
            Cli::break(2);
        }

    }

}