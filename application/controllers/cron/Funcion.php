<?php
@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Funcion extends CI_Controller {
    private $_result;

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'alerta');
        $helper = array('url');
        $model = array();
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('manager', TRUE, TRUE);
        $this->_session = $this->session_manager->datos_usuario('user_data');
        $this->items['proyecto'] = $this->config->item('project_name', 'manager');
        $this->items['favicon'] = $this->config->item('url_favicon', 'manager');
        $this->items['base_url'] = base_url();
        $this->_session = $this->session_manager->datos_usuario('user_data');

    }

    function limpiar($carpeta = ''){
        $directorio = ($carpeta != '') ? '$carpeta' : './application/libraries/imagecache/';     
        $handle = opendir($directorio);
        $ficherosEliminados = 0;
        while ($file = readdir($handle)) {
            if (is_file($directorio.$file)) {
                if (@unlink($directorio.$file) ){
                    $ficherosEliminados++;
                }
            }
        }
        echo "Eliminados : <strong>". $ficherosEliminados ."</strong>";
    }


}

