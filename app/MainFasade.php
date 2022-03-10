<?php
namespace App;

class MainFasade{
    public static function __callStatic($name, $arguments)
    {
        return app()->make(static::getFasadeAccessor())->$name(...$arguments);
        // dd($name , $arguments);
    }
}
