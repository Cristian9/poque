<?php



@session_cache_limiter('private, must-revalidate');

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

@header("Cache-Control: no-store, no-cache, must-revalidate");

@header("Cache-Control: post-check=0, pre-check=0", FALSE);

@header("Pragma: no-cache");



class Criterio extends CI_Controller {



    private $items = array();



    public function __construct() {

        parent::__construct();

        /*

         * Configuración para librerias, helpers y modelos

         */

        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo');

        $helper = array('url', 'mantenimiento');

        $model = array('m_usuario', 'm_criterio');

        $this->load->library($library);

        $this->load->helper($helper);

        $this->load->model($model);

        /*

         * Configuración personalizada

         */

        $this->items['base_url'] = base_url();

        $this->items['panel_url'] = base_url() . "manager/";

        $this->items['get_url'] = base_url() . "manager/criterio/";

        $this->items['active'] = "criterio";

        $this->items['modulo'] = "criterio";



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



    public function listar(){
        $data['titulo_pagina'] = 'Listar criterios';
        $data['pagina'] = 'Listar criterios';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $data['lista'] = $this->m_criterio->mostrar_todo();
        $data['tabla'] = $this->smarty_tpl->view('manager/criterio_tabla', $data, true);
        $data['form'] = $this->smarty_tpl->view('manager/criterio_form', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_pagina', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }



    public function editar($id = ""){

        $data['titulo_pagina'] = 'Editar criterio';

        $data['pagina'] = 'Editar criterio';

        $data = array_merge($data, $this->items);

        /* ------------------------------------------------------------ */

        

        $data['registro'] = $this->m_criterio->mostrar(array("t.id" => $id));



        $data['lista'] = $this->m_criterio->mostrar_todo();

        $data['tabla'] = $this->smarty_tpl->view('manager/criterio_tabla', $data, true);

        $data['form'] = $this->smarty_tpl->view('manager/criterio_form', $data, true);

        /* ------------------------------------------------------------ */

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/p_pagina', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }



    public function accion(){

        $id = $this->input->post('id');

        $nombre = $this->input->post('nombre');

        

        //VALIDACION DE CAMPOS

        $error = '';

        $error .= $this->mantenimiento->validacion($nombre, 'required|maxlenght[200]', 'Nombre');



        if ($error != '') {

            echo $this->alerta->mensaje_error($error, TRUE);

            EXIT;

        }



        $info['nombre'] = $nombre;

        $info['f_registro'] = date("Y-m-d H:i:s");



        if ($id == '') { // Agregar

            $resultSet = $this->m_criterio->insertar($info);

        }else{

            $resultSet = $this->m_criterio->actualizar($info, $id);

        }

        //RESPUESTA

        if($resultSet !== FALSE){

            echo $this->alerta->mensaje_exito('Registro exitoso');

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

        }else{

            echo $this->alerta->mensaje_error('Ah ocurrio un error');

        }

    }



    public function accion_denegar($id = '') {

        if ($id == '') {

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

            EXIT;

        }

        $where = array('t.id' => $id, 't.oculto' => 0);

        if (count($this->m_criterio->mostrar($where)) == 0) {

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

            EXIT;

        } else {

            $this->m_criterio->ocultar($id);

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

        }

    }



    public function accion_permitir($id = '') {

        if ($id == '') {

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

            EXIT;

        }

        $where = array('t.id' => $id, 't.oculto' => 1);

        if (count($this->m_criterio->mostrar($where)) == 0) {

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

            EXIT;

        } else {

            $this->m_criterio->permitir($id);

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

        }

    }





}

