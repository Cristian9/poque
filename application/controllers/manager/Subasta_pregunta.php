<?php
@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Subasta_pregunta extends CI_Controller {

    private $items = array();
    public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo');
        $helper = array('url', 'mantenimiento', 'fecha', 'generador');
        $model = array('m_usuario', 'm_subasta', 'm_subasta_pregunta');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->items['base_url'] = base_url();
        $this->items['panel_url'] = base_url() . "manager/";
        $this->items['get_url'] = base_url() . "manager/subasta_pregunta/";
        $this->items['active'] = "subasta";
        $this->items['modulo'] = "Subasta preguntas";

        /*
         * Datos de la sesion
         */
        $this->session_comp->verificar_logueo('u_manager', 'manager');
        $this->_session = $this->session_comp->datos_usuario('u_manager');      
        $this->items['manager'] = $this->m_usuario->mostrar('id', $this->_session->sys_id);
        $this->items['session'] = array(
            'id' => $this->_session->sys_id,
            'usuario' => $this->_session->sys_usuario,
            'nivel' => $this->_session->sys_nivel,
            'nombre' => $this->items['manager']['nombre']
            );
        $this->items['menu'] = $this->smarty_tpl->view('manager/menu', $this->items, true);
    }

    public function listar($id = ""){
        $data['titulo_pagina'] = 'Preguntas de la subasta';
        $data['pagina'] = 'Preguntas de la subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $data['agregar'] = FALSE;
        $data['lista'] = $this->m_subasta_pregunta->mostrar_cuando(array("subasta_id" => $id));
        $data['tabla'] = $this->smarty_tpl->view('manager/subasta_pregunta_tabla', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_lista', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);

    }

    public function editar($id = ""){
    	$data['titulo_pagina'] = 'Preguntas de la subasta';
        $data['pagina'] = 'Preguntas de la subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $this->load->model('m_subasta_pregunta');
        $data['registro'] = $this->m_subasta_pregunta->mostrar('t.id', $id);
        $data['form'] = $this->smarty_tpl->view('manager/subasta_pregunta_form', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function accion(){
        $id = $this->input->post('id');
    	$id_subasta = $this->input->post('id_subasta');
        $respuesta = $this->input->post('respuesta');

        $error = '';
        $error .= $this->mantenimiento->validacion($respuesta, 'required', 'Respuesta');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        $info['respuesta'] = $respuesta;
        $resultSet = $this->m_subasta_pregunta->actualizar($info, $id);
        if($resultSet !== FALSE){
            echo $this->alerta->mensaje_exito('Registro exitoso');
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar/' . $id_subasta, TRUE);
        }else{
            echo $this->alerta->mensaje_error('Ah ocurrio un error');
        }
    }
}