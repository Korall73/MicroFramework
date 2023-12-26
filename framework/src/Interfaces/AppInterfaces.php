<?php

namespace Framework;

interface AppInterface
{
    public static function set(string $key, mixed $value);
    public static function get(string $key, ?string $default = null);
    public static function rm(string $key);
    public static function clean();
    public static function start();
    public static function info();
}