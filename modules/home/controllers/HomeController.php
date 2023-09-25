<?php
//include_once APP_DIR.'controller.php';
class HomeController {
    function __construct(){
        
    }
    /**
     * Modulo para correr el home controller, la vista principal del framework
     * @return void 
     */
    function start(){
        try {
            include_once MODULE_VIEWCONTROLLER_HOME.'HomeView.php';
            $hw = new HomeView();
            $plantilla = file_get_contents(HTML.'template.html');
            list($titulo, $contenido) = $hw->homeView();
            $cont = array('{titulo}'=>$titulo, '{contenido}'=>$contenido);
            $render = str_replace(array_keys($cont), array_values($cont), $plantilla);
            print $render;
        } catch (Exception $e) {
            print $e->getMessage();
        }
        
    }
    /**
     * Metodo que demuestra que puedo entrar al controlador home a traves de la uri http://www.mi-framework.com/home
     * @return void
     */
    function uri_home(){
        try {
            include_once MODULE_VIEWCONTROLLER_HOME.'HomeView.php';
            $hw = new HomeView();
            $plantilla = file_get_contents(HTML.'template.html');
            list($titulo, $contenido) = $hw->home();
            $cont = array('{titulo}'=>$titulo, '{contenido}'=>$contenido);
            $render = str_replace(array_keys($cont), array_values($cont), $plantilla);
            print $render;
        } catch (Exception $e) {
            print $e->getMessage();
        }
        
    }
}