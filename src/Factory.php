<?php


namespace ColdCGH\User;

use ColdCGH\User\Service\User;

/**
 * Class Factory
 * @package ColdCGH\User
 * @method User user();
 */
class Factory
{
    public static function make($name,$arguments)
    {
        $application = "service\\{$name}";

        return new $application($arguments);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments): mixed
    {
        return self::make($name, $arguments);
    }
}