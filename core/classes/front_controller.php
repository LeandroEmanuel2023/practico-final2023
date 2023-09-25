<?php 
/**
 * Controlador frontal, manejara los controladores de los modulos
 */
class FrontController{
    function __construct(){

    }
    /**
     * Metodo que me carga el controlador home en la uri vacia
     */
    function load_controller(){
        $controller = 'home';
        $controller_name = ucwords($controller).'Controller';
        include_once MODULE_CONTROLLER_HOME.$controller_name.'.php';
        $moduleController = new $controller_name;
        //var_dump($moduleController);
        $moduleController->start();
    }
    /** 
     * Metodo que me carga el controlador home en la uri framework.com/home
    */
    function load_controller_home($controller){
        $controller_name = ucwords($controller).'Controller';
        include_once MODULE_CONTROLLER_HOME.$controller_name.'.php';
        $moduleController = new $controller_name;
        //$moduleController;
        return $moduleController->uri_home();
    }
    /**
     * Metodo que me carga el controlador de error
     */
    function load_controller_error(){
        $controller = 'error';
        $controller_name = ucwords($controller).'Controller';
        include_once MODULE_CONTROLLER_ERROR.$controller_name.'.php';
        $moduleController = new $controller_name;
        return $moduleController->error();
                    //var_dump($uri);
    }
    
}