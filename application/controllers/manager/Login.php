<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Login extends CI_Controller {

    private $_process;
    private $_result;

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('alerta', 'session_comp', 'mantenimiento', 'session','url_comp');
        $helper = array('url');
        $model = array('m_usuario');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */

    }

    public function ingresar() {
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('clave');
        $error = '';
        //mantenimiento

        $error .= $this->mantenimiento->validacion($usuario, 'required|maxlenght[200]', 'Usuario');
        $error .= $this->mantenimiento->validacion($password, 'required|minlenght[3]|maxlenght[50]|alphaspecial', 'Contraseña');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }

        $user = $this->m_usuario->mostrar(array("usuario" => $usuario, "clave" => md5($password), "nivel_id" => 2, "oculto" => 0));
        if(count($user) <= 0){
            echo $this->alerta->mensaje_error("Datos incorrectos", TRUE);
            EXIT;
        }
        $data = array('u_manager' =>
            array(
                'sys_id' => $user['id'],
                'sys_usuario' => $user['usuario'],
                'sys_nivel' => $user['nivel_id']
                )
            );
        // $this->session->set_userdata($data);
        $_SESSION['user_session'] = $data;
        echo $this->url_comp->direccionar(base_url() . "manager/home");
        EXIT;
    }

    public function salir() {
        $this->session_comp->destruir_session('u_manager');
        echo $this->alerta->location_href(base_url() . 'manager', TRUE);
        EXIT;
    }

}
