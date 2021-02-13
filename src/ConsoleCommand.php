<?php

namespace Rdhafiz\Console;

class ConsoleCommand
{
    public static function log($str)
    {
        echo "\033[37m ".$str." \033[\r\n";
    }
    public static function primary($str)
    {
        echo "\033[35m ".$str." \033[\r\n";
    }
    public static function info($str)
    {
        echo "\033[36m ".$str." \033[\r\n";
    }
    public static function warn($str)
    {
        echo "\033[33m ".$str." \033[\r\n";
    }
    public static function error($str)
    {
        echo "\033[31m ".$str." \033[\r\n";
    }
    public static function success($str)
    {
        echo "\033[32m ".$str." \033[\r\n";
    }
}
