<?php

namespace Valey\Components;

/**
 * Class Section
 * @author: Gabriel Malaquias <gemalaquias@gmail.com>
 * @package Valey\Components
 */
class Section {

    /**
     * @var array
     */
    public static $sections = array();

    /**
     * @var string
     */
    public static $name = null;

    /**
     * @param $name
     * @throws \ErrorException
     */
    public static function start($name){
        if(static::$name != null)
            throw new \ErrorException("Session {$name} not finalized");
        static::$name = $name;
        ob_start();
    }

    public static function end(){
        static::$sections[static::$name] = ob_get_clean();
        static::$name = null;
    }

    /**
     * @param $name
     * @return mixed
     */
    public static function get($name){
        if(isset(static::$sections[$name]))
            return static::$sections[$name];
    }

}