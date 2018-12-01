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

        $model = array('m_estadistica');

        $this->load->library($library);

        $this->load->helper($helper);

        $this->load->model($model);

        /*

         * Configuración personalizada

         */

        $this->config->load('title', TRUE, TRUE);

        $this->items['base_url'] = base_url();

        $this->items['panel_url'] = base_url() . "manager/";

        $this->items['get_url'] = base_url() . "manager/";

        $this->items['active'] = 'home';

        $this->items['project_name'] = 'Poque';

        $this->items['menu'] = $this->smarty_tpl->view('manager/menu', $this->items, true);



    }



    public function login() {

        $this->session_comp->login('u_manager', 'manager/home');

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

        $this->session_comp->verificar_logueo('u_manager', 'manager');

        $session = $this->session_comp->datos_usuario('u_manager');

        $data['usuario'] = $this->m_usuario->mostrar('id', $session->sys_id);



        $data['session'] = array(

            'id' => $session->sys_id,

            'usuario' => $session->sys_usuario,

            'nivel' => $session->sys_nivel,

            'nombre' => $data['usuario']['nombre']

            );

        $data['titulo_pagina'] = 'Inicio';



        //ESTADISTICAS



        $proveedores = $this->m_estadistica->proveedor_por_sector();

        $e_prov = array();

        foreach ($proveedores as $p) {

            $e_prov[] = array(

                'name' => $p['sector'],

                'y' => (float) $p['cantidad'],

                'drilldown' => $p['id'],

                );

        }

        $data['e_prov'] = json_encode($e_prov);



        $clientes = $this->m_estadistica->cliente_por_sector();

        $e_client = array();

        foreach ($clientes as $p) {

            $e_client[] = array(

                'name' => $p['sector'],

                'y' => (float) $p['cantidad'],

                'drilldown' => $p['id'],

                );

        }

        $data['e_client'] = json_encode($e_client);



        //SUBASTA POR SECTOR

        $subastas = $this->m_estadistica->subasta_por_categoria();

        $e_subasta = array();

        foreach ($subastas as $s) {

            $e_subasta[] = array(

                'name' => $s['categoria'],

                'y' => (float) $s['cantidad'],

                'drilldown' => $s['id']

                );

        }

        $data['e_subasta'] = json_encode($e_subasta);



        //SUBASTA PRECIO FINAL POR MES

        $subasta_precio_final_por_mes = $this->m_estadistica->subasta_precio_final_por_mes();

        $e_subasta_precio_final_por_mes = array();

        foreach ($subasta_precio_final_por_mes as $s) {

            if($s['precio_final'] != 0){

                $e_subasta_precio_final_por_mes[] = array(

                    'name' => $s['codigo'] . ' ' . $s['producto'],

                    'y' => (float) $s['precio_final'],

                    'drilldown' => $s['id']

                    );
            }


        }

        $data['e_subasta_precio_final_por_mes'] = json_encode($e_subasta_precio_final_por_mes);



        //SUBASTA AHORRO POR MES

        $subasta_ahorro_por_mes = $this->m_estadistica->subasta_ahorro_por_mes();

        $e_subasta_ahorro_por_mes = array();

        foreach ($subasta_ahorro_por_mes as $s) {
            if($s['precio_final'] != 0){

                $e_subasta_ahorro_por_mes[] = array(

                    'name' => $s['codigo'] . ' ' . $s['producto'],

                    'y' => (float) $s['ahorro'],

                    'drilldown' => $s['id']

                    );
            }

        }

        $data['e_subasta_ahorro_por_mes'] = json_encode($e_subasta_ahorro_por_mes);



        //SUBASTA MONTO POR MES

        $subasta_monto_por_mes = $this->m_estadistica->subasta_monto_por_mes();

        $e_subasta_monto_por_mes = array();

        foreach ($subasta_monto_por_mes as $s) {

            if($s['precio_final'] != 0){

                $e_subasta_monto_por_mes['subastas'][] = $s['codigo'] . ' (' . $s['producto'] . ')';

                $e_subasta_monto_por_mes['precio_final'][] = (float)$s['precio_final'];

                $e_subasta_monto_por_mes['ahorro'][] = (float)$s['ahorro'];

            }


        }

        $e_subasta_p = array();

        //$e_subasta_p['subastas'] = $e_subasta_monto_por_mes['subastas'];

        $e_subasta_p[] = array(

            'name' => 'Precio final',

            'data' => $e_subasta_monto_por_mes['precio_final']

            );

        $e_subasta_p[] = array(

            'name' => 'Ahorro',

            'data' => $e_subasta_monto_por_mes['ahorro']

            );

        $data['e_subasta_monto_por_mes'] = json_encode($e_subasta_p);

        $data['e_subasta_por_mes'] = json_encode($e_subasta_monto_por_mes['subastas']);



        //SUBASTA AHORRO ANUAL POR CATEGORIA

        $e_ahorro_anual_categoria = $this->m_estadistica->subasta_ahorro_anual_por_categoria();

        $aac_datos = array();

        foreach ($e_ahorro_anual_categoria as $e) {

            $monto_meses = array(

                (float)$e['Enero'],

                (float)$e['Febrero'],

                (float)$e['Marzo'],

                (float)$e['Abril'],

                (float)$e['Mayo'],

                (float)$e['Junio'],

                (float)$e['Julio'],

                (float)$e['Agosto'],

                (float)$e['Setiembre'],

                (float)$e['Octubre'],

                (float)$e['Noviembre'],

                (float)$e['Diciembre'],

                );

            $total_meses = (float)$e['Enero'] + (float)$e['Febrero'] + (float)$e['Marzo'] + (float)$e['Abril'] + (float)$e['Mayo'] + (float)$e['Junio'] + (float)$e['Julio'] + (float)$e['Agosto'] + (float)$e['Setiembre'] + (float)$e['Octubre'] + (float)$e['Noviembre'] + (float)$e['Diciembre'];

            $aac_datos[] = array(

                'name' => $e['categoria'],

                'data' => $monto_meses,

                'total' => $total_meses

                );

        }

        $data["aac_datos"] = json_encode($aac_datos);
        $data["aac_info"] = $aac_datos;



        //SUBASTA PRECIO FINAL ANUAL POR CATEGORIA

        $e_precio_final_anual_categoria = $this->m_estadistica->subasta_precio_final_anual_por_categoria();

        $pfac_datos = array();

        foreach ($e_precio_final_anual_categoria as $e) {

            $monto_meses = array(

                (float)$e['Enero'],

                (float)$e['Febrero'],

                (float)$e['Marzo'],

                (float)$e['Abril'],

                (float)$e['Mayo'],

                (float)$e['Junio'],

                (float)$e['Julio'],

                (float)$e['Agosto'],

                (float)$e['Setiembre'],

                (float)$e['Octubre'],

                (float)$e['Noviembre'],

                (float)$e['Diciembre'],

                );

            $total_meses = (float)$e['Enero'] + (float)$e['Febrero'] + (float)$e['Marzo'] + (float)$e['Abril'] + (float)$e['Mayo'] + (float)$e['Junio'] + (float)$e['Julio'] + (float)$e['Agosto'] + (float)$e['Setiembre'] + (float)$e['Octubre'] + (float)$e['Noviembre'] + (float)$e['Diciembre'];

            $pfac_datos[] = array(

                'name' => $e['categoria'],

                'data' => $monto_meses,

                'total' => $total_meses,

                );

        }

        $data["pfac_datos"] = json_encode($pfac_datos);
        $data["pfac_info"] = $pfac_datos;



        /*

         * Impresión de páginas

         */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('manager/home', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }



    public function perfil() {
        $this->session_comp->verificar_logueo('u_manager', 'manager');
        $session = $this->session_comp->datos_usuario('u_manager');
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

    /*public function grafico() {
        $this->session_comp->verificar_logueo('u_manager', 'manager');
        $session = $this->session_comp->datos_usuario('u_manager');
        $data['usuario'] = $this->m_usuario->mostrar('id', $session->sys_id);
        $data['session'] = array(
            'id' => $session->sys_id,
            'usuario' => $session->sys_usuario,
            'nivel' => $session->sys_nivel,
            'nombre' => $data['usuario']['nombre']
            );
        $data['titulo_pagina'] = 'Perfil';
        $data['pagina'] = 'Perfil';

        $data['registro'] = $this->m_usuario->mostrar('u.id', $session->sys_id);
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/grafico', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }*/

}
