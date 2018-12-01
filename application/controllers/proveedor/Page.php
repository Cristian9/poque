<?php



@session_cache_limiter('private, must-revalidate');

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

@header("Cache-Control: no-store, no-cache, must-revalidate");

@header("Cache-Control: post-check=0, pre-check=0", FALSE);

@header("Pragma: no-cache");

error_reporting(0);

class Page extends CI_Controller {



    private $items = array();



    public function __construct() {

        parent::__construct();

        /*

         * Configuración para librerias, helpers y modelos

         */

        $library = array('smarty_tpl', 'session_comp');

        $helper = array('url');

        $model = array('m_proveedor', 'm_usuario', 'm_proveedor_producto', 'm_departamento', 'm_provincia', 'm_distrito', 'm_sector', 'm_rubro', 'm_categoria', 'm_subasta_proveedor');

        $this->load->library($library);

        $this->load->helper($helper);

        $this->load->model($model);

        /*

         * Configuración personalizada

         */

        $this->config->load('title', TRUE, TRUE);

        $this->items['base_url'] = base_url();

        $this->items['panel_url'] = base_url() . "proveedor/";

        $this->items['get_url'] = base_url() . "proveedor/";

        $this->items['active'] = 'home';

        $this->items['project_name'] = 'Poque';

        $this->items['menu'] = $this->smarty_tpl->view('proveedor/menu', $this->items, true);



    }



    public function login() {

        $this->session_comp->login('u_proveedor', 'proveedor/home');

        $data['page_title'] = $this->items['project_name'] . ' | Inicio';

        $data['current_home'] = 'current';

        /**/



        /*

         * Impresión de páginas

         */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/login', $data);

    }



    public function home() {
        $this->session_comp->verificar_logueo('u_proveedor', 'proveedor');

        $session = $this->session_comp->datos_usuario('u_proveedor');

        $data['usuario'] = $this->m_usuario->mostrar('id', $session->sys_id);

        $data['session'] = array(

            'id' => $session->sys_id,

            'usuario' => $session->sys_usuario,

            'nivel' => $session->sys_nivel,

            'nombre' => $data['usuario']['nombre']

            );

        $data['titulo_pagina'] = 'Inicio';


        $data['registro'] = $this->m_proveedor->mostrar('t.usuario_id', $session->sys_id);

        $data['departamentos'] = $this->m_departamento->mostrar_activos();

        $data['provincias'] = $this->m_provincia->mostrar_cuando(array("t.departamento_id" => $data['registro']['departamento_id']));

        $data['distritos'] = $this->m_distrito->mostrar_cuando(array("t.provincia_id" => $data['registro']['provincia_id']));

        $data['sectores'] = $this->m_sector->mostrar_activos();

        $data['rubros'] = $this->m_rubro->mostrar_cuando(array("t.sector_id" => $data['registro']['sector_id']));

        $data['categorias'] = $this->m_categoria->mostrar_activos();

        $data['p_productos'] = $this->m_proveedor_producto->mostrar_cuando(array("proveedor_id" => $data['registro']['id']));

        $data['subastas'] = count( $this->m_subasta_proveedor->subastas_proveedor($data['registro']['id']) );

        /*

         * Impresión de páginas

         */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('proveedor/home', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }



    public function perfil() {

        $this->session_comp->verificar_logueo('u_proveedor', 'proveedor');

        $session = $this->session_comp->datos_usuario('u_proveedor');

        $data['usuario'] = $this->m_usuario->mostrar('id', $session->sys_id);

        $data['session'] = array(

            'id' => $session->sys_id,

            'usuario' => $session->sys_usuario,

            'nivel' => $session->sys_nivel,

            'nombre' => $data['usuario']['nombre']

            );

        $data['titulo_pagina'] = 'Perfil';

        $data['pagina'] = 'Perfil';

        /* ------------------------------------------------------------ */

        $data['registro'] = $this->m_usuario->mostrar('u.id', $session->sys_id);

        /*

         * Impresión de páginas

         */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/perfil', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }

}
