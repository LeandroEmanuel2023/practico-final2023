<?php
class ErrorView{
    function __construct(){

    }
    /**
     * Metodo error que llama al template error.html para mostrar al usuario
     * @return array 
     */
    function error(){
        $titulo = 'Bienvenido a mi plantilla MVC';
        $data = (object)[
            'error' => 'Error, la pagina solicitada no existe.'
        ];
        $claves = array_keys(get_object_vars($data));
        foreach($claves as &$clave) $clave = '{'.$clave.'}';
        $valor = array_values(get_object_vars($data));
        $plantilla = file_get_contents(HTML.'error.html');
        $contenido = str_replace($claves, $valor, $plantilla);
        return array($titulo, $contenido);
    }
}