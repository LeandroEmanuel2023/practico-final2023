<?php 

class ErrorController{
    function __construct(){
        
    }
    /**
     * Metodo para regresar una vista de error en caso de no corresponder en la URL
     * @return void
     */
    function error(){
        try {
            include_once MODULE_VIEWCONTROLLER_ERROR.'ErrorView.php';
            $mve = new ErrorView();
            $plantilla = file_get_contents(HTML.'template.html');
            list ($titulo, $contenido) = $mve->error();
            $cont = array('{titulo}'=> $titulo, '{contenido}'=>$contenido);
            $render = str_replace(array_keys($cont), array_values($cont), $plantilla);
            print $render;
        } catch (Exception $e) {
            print $e->getMessage();
        }
        
    }
}