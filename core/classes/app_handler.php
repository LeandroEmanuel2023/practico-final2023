<?php 
class AppHandler{
    /**
     * Clase encargado de analizar la uri, separarla y returnarla en forma de array
     * @return array
     */
    public function analizer(){
        $uri = $_SERVER['REQUEST_URI'];
        $uri = rtrim($uri, '/');
        $uri = explode('/', $uri);
        array_shift($uri);
        return $uri;
    }
}