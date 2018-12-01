<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Dependencia extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para modelos
         */
        $model = array('m_rubro', 'm_producto');
        $this->load->model($model);
    }
    //RUBROS POR SECTOR
    public function rubro(){
        $data = array();
        $sector = $this->input->post('sector');
        $rubro = $this->m_rubro->mostrar_cuando(array("t.sector_id" => $sector));
        if ($rubro !== FALSE) {
            foreach ($rubro as $d) {
                $data[] = array(
                    'id' => $d['id'],
                    'descripcion' => $d['nombre']
                );
            }
        }
        echo json_encode($data);
    }

    //PRODUCTOS POR CATEGORIA
    public function producto(){
        $data = array();
        $categoria = $this->input->post('categoria');
        $producto = $this->m_producto->mostrar_cuando(array("t.categoria_id" => $categoria));
        if ($producto !== FALSE) {
            foreach ($producto as $d) {
                $data[] = array(
                    'id' => $d['id'],
                    'descripcion' => $d['nombre']
                );
            }
        }
        echo json_encode($data);
    }

}
