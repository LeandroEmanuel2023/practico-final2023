<?php

class Controller{
    private $fwk = 'Mi - Framework';
    private $uri =[];
    public function __construct(){
        $this->init_session();
        $this->init_load_config();  
        $this->start();
        
    }
    /**
     * Metodo que me manejara el URL, se comunicara con el controlador frontal
     * 
     */
    public function start(){
            try {
                $uri = $this->filter_url();
                
                include_once CLASSES.'front_controller.php';
                $fn = new FrontController();
                //print_r($uri);
                //ACA DEBO EMPEZAR A CORRER MI FRONT CONTROLLER
                if ($uri==null) {
                    return $fn->load_controller();
                }elseif($uri[0]=='home'){
                    $home = $uri[0];
                    return $fn->load_controller_home($home);
                }else{
                    return $fn->load_controller_error();
                }
            
            } catch (Exception $e) {
                return $e->getMessage();
            }
            
    }
    /**
     * Meotodo para iniciar la sesion en el sistema
     * @return void
     **/
    private function init_session(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        return;
    }
    /**
     * Metodo que me carga el archivo de configuracion settings
     * @return void
     */
    private function init_load_config(){
        //modificar valores en produccion
        $file = 'settings.php';
        if (!is_file('core/config/'.$file)/*!is_file('/storage/ssd4/874/20796874/public_html/core/config/'.$file)*/) {
            die(sprintf('El archivo %s no se encuentra, es requerido para que el Framework %s funcione!', $file, $this->fwk));
        }
        //require_once '/storage/ssd4/874/20796874/public_html/core/config/'.$file;
        require_once 'core/config/'.$file;
        return;
    }
    /**
     * Metodo que me filtra la url y me la devuelve en forma de array
     * @return array
     */
    private function filter_url(){
        require_once CLASSES.'app_handler.php';
            $url = new AppHandler();
            $url = $url->analizer();
            array_shift($url);//este array shift lo debi colocar en desarrollo para que funcione
            return $url; 
    }

}