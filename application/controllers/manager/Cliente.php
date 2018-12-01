<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Cliente extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo');
        $helper = array('url', 'mantenimiento', 'fecha');
        $model = array('m_usuario', 'm_cliente', 'm_departamento', 'm_provincia', 'm_distrito', 'm_sector', 'm_rubro', 'm_categoria', 'm_cliente_producto', 'm_subasta');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->items['base_url'] = base_url();
        $this->items['panel_url'] = base_url() . "manager/";
        $this->items['get_url'] = base_url() . "manager/cliente/";
        $this->items['active'] = "cliente";
        $this->items['modulo'] = "cliente";

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
        $data['titulo_pagina'] = 'Listar cliente';
        $data['pagina'] = 'Listar cliente';
        /* ------------------------------------------------------------ */
        $data['agregar'] = TRUE;
        $data['lista'] = $this->m_cliente->mostrar_todo();
        $data['tabla'] = $this->smarty_tpl->view('manager/cliente_tabla', $data, true);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_lista', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function agregar(){
        $data['titulo_pagina'] = 'Agregar cliente';
        $data['pagina'] = 'Agregar cliente';
        /* ------------------------------------------------------------ */
        $data['departamentos'] = $this->m_departamento->mostrar_activos();
        $data['sectores'] = $this->m_sector->mostrar_activos();
        $data['categorias'] = $this->m_categoria->mostrar_activos();
        $data['p_productos'] = array();
        $data['form'] = $this->smarty_tpl->view('manager/cliente_form', $data, true);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function editar($id = ""){
        $data['titulo_pagina'] = 'Editar cliente';
        $data['pagina'] = 'Editar cliente';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $data['registro'] = $this->m_cliente->mostrar(array("t.id" => $id));
        $data['departamentos'] = $this->m_departamento->mostrar_activos();
        $data['provincias'] = $this->m_provincia->mostrar_cuando(array("t.departamento_id" => $data['registro']['departamento_id']));
        $data['distritos'] = $this->m_distrito->mostrar_cuando(array("t.provincia_id" => $data['registro']['provincia_id']));
        $data['sectores'] = $this->m_sector->mostrar_activos();
        $data['rubros'] = $this->m_rubro->mostrar_cuando(array("t.sector_id" => $data['registro']['sector_id']));
        $data['categorias'] = $this->m_categoria->mostrar_activos();
        $data['p_productos'] = $this->m_cliente_producto->mostrar_cuando(array("cliente_id" => $id));

        $data['form'] = $this->smarty_tpl->view('manager/cliente_form', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }


    public function accion(){
        $id = $this->input->post('id');
        $codigo = $this->input->post('codigo');
        $ruc = $this->input->post('ruc');
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $contacto = $this->input->post('contacto');
        $telefono = $this->input->post('telefono');
        $anexo = $this->input->post('anexo');
        $celular = $this->input->post('celular');
        $direccion = $this->input->post('direccion');
        $rubro = $this->input->post('rubro');
        $distrito = $this->input->post('distrito');
        $a_p_categoria = $this->input->post('a_p_categoria[]');
        $a_p_producto = $this->input->post('a_p_producto[]');
        $logo = $this->archivo->archivo_1('logo', 'single');
        
        //VALIDACION DE CAMPOS
        $error = '';
        if($id == "") {
            $error .= $this->mantenimiento->validacion($codigo, 'required|minlenght[6]|maxlenght[12]', 'Código');
        }
        $error .= $this->mantenimiento->validacion($ruc, 'required|maxlenght[20]', 'RUC');
        $error .= $this->mantenimiento->validacion($nombre, 'required|maxlenght[255]', 'Nombre');
        $error .= $this->mantenimiento->validacion($email, 'required|maxlenght[255]', 'Email');
        $error .= $this->mantenimiento->validacion($contacto, 'required|maxlenght[255]', 'Contacto');
        $error .= $this->mantenimiento->validacion($telefono, 'required|maxlenght[20]', 'Teléfono');
        $error .= $this->mantenimiento->validacion($celular, 'required|maxlenght[20]', 'Celular');
        $error .= $this->mantenimiento->validacion($rubro, 'required', 'Rubro');
        $error .= $this->mantenimiento->validacion($direccion, 'required|maxlenght[255]', 'Direccion');
        $error .= $this->mantenimiento->validacion($distrito, 'required', 'Distrito');

        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        //VALIDAR QUE EL CODIGO DEL cliente NO EXISTA
        $existe_curso = $this->m_cliente->existe_campo('codigo', "clie_" . $codigo, $id);
        if($existe_curso){
            echo $this->alerta->mensaje_error('<li style="margin-left: 12px;">El usuario <b>"' . $codigo . '"</b> ya existe</li>', TRUE);
            EXIT;
        }
        if($id == "") {
            $info['codigo'] = "cli_" . $codigo;
        }

        $info['n_documento'] = $ruc;
        $info['tipo_documento_id'] = 1;
        $info['nombre'] = $nombre;
        $info['email'] = $email;
        $info['contacto'] = $contacto;
        $info['telefono'] = $telefono;
        $info['anexo'] = $anexo;
        $info['celular'] = $celular;
        $info['direccion'] = $direccion;
        $info['rubro_id'] = $rubro;
        $info['distrito_id'] = $distrito;
        if ($logo !== FALSE) {
            $marca = array('marca' => '', 'tipo' => 'string');
            $info['logo'] = $this->archivo->guardar_imagen($logo, 'public/imagen/cliente', $marca, 1024);
        }

        if ($id == '') { // Agregar
            $info['f_registro'] = date("Y-m-d H:i:s");
            $resultSet = $this->m_cliente->insertar($info);
        }else{
            $cliente = $this->m_cliente->mostrar('t.id', $id);
            if ($logo !== FALSE) {
                $this->archivo->eliminar_imagen($cliente['logo'], 'public/imagen/cliente');
            }
            $resultSet = $this->m_cliente->actualizar($info, $id);
        }
        //RESPUESTA
        if($resultSet !== FALSE){
            if($id == '')
            {
                $id = $resultSet;
                //USUARIO
                $u_info['nombre'] = $nombre;
                $u_info['usuario'] = "cli_" . $codigo;
                $u_info['clave'] = md5($codigo);
                $u_info['nivel_id'] = 4;
                $result = $this->m_usuario->insertar($u_info);
                $this->m_cliente->actualizar(array("usuario_id" => $result), $resultSet);

            }

            $p_info['cliente_id'] = $id;
            for ($i=0; $i < count($a_p_producto); $i++) { 
                $p_info['producto_id'] = $a_p_producto[$i];
                $this->m_cliente_producto->insertar($p_info);
            }

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
        if (count($this->m_cliente->mostrar($where)) == 0) {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        } else {
            $this->m_cliente->ocultar($id);
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
        }
    }

    public function accion_permitir($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        }
        $where = array('t.id' => $id, 't.oculto' => 1);
        if (count($this->m_cliente->mostrar($where)) == 0) {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        } else {
            $this->m_cliente->permitir($id);
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
        }
    }

    public function accion_eliminar($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        }
        $where = array('t.id' => $id, 't.oculto' => 1);
        if (count($this->m_cliente->mostrar($where)) == 0) {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        } else {
            $subastas = $this->m_subasta->mostrar_cuando(array("cliente_id" => $id));
            if(count($subastas) > 0){
                echo $this->alerta->mensaje_error("No se puede eliminar este registro", TRUE);
            }else{
                $this->m_cliente->eliminar($id);
                echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            }
        }
    }

    public function eliminar_producto($id = '') {
        $id = $this->input->post('id');
        if ($id == '') {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        }
        $this->m_cliente_producto->eliminar($id);
        echo $this->url_comp->actualizar();
    }


}
