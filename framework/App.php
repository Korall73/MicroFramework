<?php

namespace Framework;

use Framework\Abstract\AppAbstract;

class App extends AppAbstract
{
    private static $_storage = [];

    public static function set(string $key, mixed $value) : object
    {
        return (object) self::$_storage[$key] = $value;
    }

    public static function get(string $key, ?string $default = null) : object
    {
        return (object) (isset(self::$_storage[$key])) ? self::$_storage[$key] : $default;
    }
}