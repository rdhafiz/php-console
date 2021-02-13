<?php

namespace Rdhafiz\Console;

class Console
{
    static $primary = '#5f27cd', $info = '#2e86de', $warn = '#ff9f43', $error = '#ee5253', $success = '#10ac84';

    public static function log($str)
    {
        echo "<strong><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }

    public static function primary($str)
    {
        echo "<strong style='color: " . self::$primary . "'><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }

    public static function info($str)
    {
        echo "<strong style='color: " . self::$info . "'><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }

    public static function warn($str)
    {
        echo "<strong style='color: " . self::$warn . "'><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }

    public static function error($str)
    {
        echo "<strong style='color: " . self::$error . "'><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }

    public static function success($str)
    {
        echo "<strong style='color: " . self::$success . "'><pre>";
        print_r($str);
        echo "</pre></strong><hr>";
    }
}
