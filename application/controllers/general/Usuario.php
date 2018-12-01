<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Usuario extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para modelos
         */
        $library = array('mantenimiento', 'alerta', 'url_comp');
        $model = array('m_usuario');
        $this->load->model($model);
        $this->load->library($library);
    }

    public function perfil(){
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $usuario = $this->input->post('usuario');
        $clave = $this->input->post('clave');
        $reclave = $this->input->post('reclave');

        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|maxlenght[20]', 'Nombre');
        $error .= $this->mantenimiento->validacion($usuario, 'required|maxlenght[255]', 'Usuario');
        $error .= $this->mantenimiento->validacion($clave, 'matched[Repetir Clave%' . $reclave . ']', 'Clave');

        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        $info['nombre'] = $nombre;
        $info['usuario'] = $usuario;

        if ($clave != '') {
            $info['clave'] = md5($clave);
        }
        $resultSet = $this->m_usuario->actualizar($info, $id);
        
        //RESPUESTA
        if($resultSet !== FALSE){
            echo $this->alerta->mensaje_exito('Registro exitoso');
            echo $this->url_comp->actualizar();
        }else{
            echo $this->alerta->mensaje_error('Ah ocurrio un error');
        }
    }

}
