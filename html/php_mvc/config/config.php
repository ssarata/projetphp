<?php
namespace config;
trait configu{
    function conn(string $path){
        $lines=file($path,FILE_IGNORE_NEW_LINES);
        foreach($lines as $line){
            list($name,$value)=explode("=",$line,2);
            $_ENV[$name] = $value;
            var_dump($_ENV);
        }
        return $_ENV;
    }
}
