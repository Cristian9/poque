<?php



@session_cache_limiter('private, must-revalidate');

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

@header("Cache-Control: no-store, no-cache, must-revalidate");

@header("Cache-Control: post-check=0, pre-check=0", FALSE);

@header("Pragma: no-cache");



class Preguntas_frecuentes extends CI_Controller {



    private $items = array();



    public function __construct() {

        parent::__construct();

        /*

         * Configuración para librerias, helpers y modelos

         */

        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo');

        $helper = array('url', 'mantenimiento', 'fecha');

        $model = array('m_usuario', 'm_proveedor', 'm_preguntas_frecuentes');

        $this->load->library($library);

        $this->load->helper($helper);

        $this->load->model($model);

        /*

         * Configuración personalizada

         */

        $this->items['base_url'] = base_url();

        $this->items['panel_url'] = base_url() . "proveedor/";

        $this->items['get_url'] = base_url() . "proveedor/preguntas_frecuentes/";

        $this->items['active'] = "preguntas_frecuentes";

        $this->items['modulo'] = "preguntas_frecuentes";



        /*

         * Datos de la sesion

         */

        $this->session_comp->verificar_logueo('u_proveedor', 'proveedor');

        $this->_session = $this->session_comp->datos_usuario('u_proveedor');      

        $this->items['usuario'] = $this->m_usuario->mostrar('id', $this->_session->sys_id);

        $this->items['proveedor'] = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);

        $this->items['session'] = array(

            'id' => $this->_session->sys_id,

            'user_id' => $this->items['proveedor']['id'],

            'usuario' => $this->_session->sys_usuario,

            'nivel' => $this->_session->sys_nivel,

            'nombre' => $this->items['usuario']['nombre']

            );

        $this->items['menu'] = $this->smarty_tpl->view('proveedor/menu', $this->items, true);

    }

    public function listar(){

        $data['titulo_pagina'] = 'Preguntas frecuentes';

        $data['pagina'] = 'Preguntas frecuentes';

        /* ------------------------------------------------------------ */

        $data['lista'] = array();

        $proveedor = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);

        $data['lista'] = $this->m_preguntas_frecuentes->mostrar_activos();

        $data['contenido'] = $this->smarty_tpl->view('proveedor/preguntas_frecuentes_lista', $data, true);

        /* ------------------------------------------------------------ */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/p_vacio', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }

}

