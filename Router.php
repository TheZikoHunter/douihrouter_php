<?php
class Router{

    private static array $routes;

    public static function register($route = '/', $filename=''){
        self::$routes[$route] = $filename;
    }

    public static function run(string $URI){
        $route = explode('?', $URI)[0];
        $play = self::$routes[$route];
        if($play){
            try{
                require_once $play;
            } catch(Error $e){
                echo "<h1>Can't find the file </h1> <p>" . $e -> getMessage() . "</p>";
            }
            
        }else{
            echo "<h1>Page not found 404</h1>";
        }
    }
}