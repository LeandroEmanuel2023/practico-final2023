<?php
/**
 * este archivo tendra las configuraciones core, variables requeridas y variables constantes de las URLs y directorios
 */
//define('REMOTE_ADR', $_SERVER['REMOTE_ADDR']);
//constante para saber si trabajamos de forma local o remota, o sea si estamos desarrollando o en ambiente de produccion
define('IS_LOCAL'       , in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
//configuracion para definir el horario que estamos trabajando
date_default_timezone_set('America/Argentina/Buenos_Aires');

//lenguaje
define('LANG'           , 'es');
//version sitio
define('SITEVERSION'    , '1.0');
//ruta base del proyecto
define('BASEPATH'       , IS_LOCAL ? '/public_html/': ' /storage/ssd4/874/20796874/public_html/');

//sal del sistema
//esto es un string o token random y se utiliza para agregar una capa de seguridad a ej, los password
define('AUTH_SALT'      , 'mi-framework\m/');
//puerto del sitio
//define('PORT'           , '21');
//define('PORT'           , '8848'); //puerto prepros
define('PORT'           , '80'); //puerto php myadmin
//URL del sitio
define('URL'            , IS_LOCAL ? 'http://127.0.0.1:'.PORT.BASEPATH : 'https://mi-fmwkmvc2023.000webhostapp.com/');

//defino separador de escritorio
define('DS'             , DIRECTORY_SEPARATOR);
//rutas de nuestros directorios y archivos
define('ROOT'           , getcwd().DS);
//constante para la carpeta core
define('APP_DIR'        , ROOT.'core'.DS);
define('CLASSES'        , APP_DIR.'classes'.DS);
define('CONFIG'         , APP_DIR.'core'.DS);

//constantes para la carpeta MODULES,en esta carpeta van los modelos, vistas y controladores
define('MODULES_DIR'    , ROOT.'modules'.DS);
//definiciones de rutas para los modulos
define('MODULE_HOME'    , MODULES_DIR.'home'.DS);
define('MODULE_ERROR'   , MODULES_DIR.'error'.DS);

define('MODULE_CONTROLLER_HOME'         , MODULE_HOME.'controllers'.DS);
define('MODULE_VIEWCONTROLLER_HOME'     , MODULE_HOME.'views'.DS);

define('MODULE_CONTROLLER_ERROR'        , MODULE_ERROR.'controllers'.DS);
define('MODULE_VIEWCONTROLLER_ERROR'    , MODULE_ERROR.'views'.DS );

//constantes para la carpeta static
define('STATIC_DIR'     , URL.'static/');
define('CSS'            , STATIC_DIR.'css/');
define('HTML'           , STATIC_DIR.'html/');
define('IMG'            , STATIC_DIR.'img/');
define('JS'             , STATIC_DIR.'js/');
define('PLUGINS'        , STATIC_DIR.'plugins/');
define('UPLOADS'        , STATIC_DIR.'uploads/');

//credenciales para la base de datos
//set para la conxion en desarrollo
define('LDB_ENGINE'     , 'mysql');
define('LDB_HOST'       , 'localhost');
define('LDB_NAME'       , '__LOCAL_DB__');
define('LDB_USER'       , 'root');
define('LDB_PASS'       , '');
define('LDB_CHARSET'    , 'utf8');

//set para conexion de produccion o servidor real
define('DB_ENGINE'      , 'mysql');
define('DB_HOST'        , 'localhost');
define('DB_NAME'        , '__REMOTEDB__');
define('DB_USER'        , '__REMOTEDB__');
define('DB_PASS'        , '__REMOTEDB__');
define('DB_CHARSET'     , '__REMOTECHARSET__');

//el controlador por defecto
//el metodo por defecto
//el controlador de errores por defecto
define('DEFAULT_CONTROLLER'       , 'home');
define('DEFAULT_ERROR_CONTROLLER' , 'error');
define('DEFAULT_METHOD'           , 'index');


