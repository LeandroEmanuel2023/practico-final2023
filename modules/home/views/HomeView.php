<?php
/**
 * Clase HomeView, vista logica del controllador home
 */
class HomeView{
    function __construct(){

    }
    /**
     * Metodo que me carga la vista home.html
     * @return  array
     */
    function homeView(){
        $titulo = 'Bienvenido a mi plantilla MVC';
        //no funciona en el template
        $data = (object)[ 
            'logo'=>IMG.'mi-logo.png'
        ];
        
        $cl = array_keys(get_object_vars($data));
        foreach ($cl as &$c) $c = '{'.$c.'}';
        $valor = array_values(get_object_vars($data));
        
        $plantilla = file_get_contents(HTML.'home.html');//solo en esta plantilla se reemplazaran los valores de $data
        $contenido = str_replace($cl, $valor, $plantilla);
        return array($titulo, $contenido);
    }
    /**
     * Metodo que me carga la vista home, en caso de entrar por URL framework.com/home
     * @return array
     */
    function home(){
        $titulo = "Bienvenido a Mi-Framework - estoy entrando por el Home";
        
        //no funciona en el template
        $data = (object)[ 
            'logo'=>IMG.'mi-logo.png'
        ];
        
        $cl = array_keys(get_object_vars($data));
        foreach ($cl as &$c) $c = '{'.$c.'}';
        $valor = array_values(get_object_vars($data));
        $plantilla = file_get_contents(HTML.'home.html');
        $contenido = str_replace($cl, $valor, $plantilla);
        return array($titulo, $contenido);
    }
}