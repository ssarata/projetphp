<?php
namespace config;
trait Config
{
    function load_env(string $path)
    {
        $lines = file($path, FILE_IGNORE_NEW_LINES);
    
        foreach ($lines as $line) {
    
            list($name, $value) = explode("=", $line, 2);
    
            $_ENV[$name] = $value;
        }
        return $_ENV;
    }
}