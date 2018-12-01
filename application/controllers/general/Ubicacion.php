<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Ubicacion extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para modelos
         */
        $model = array('m_pais', 'm_departamento', 'm_provincia', 'm_distrito');
        $this->load->model($model);
    }

    public function departamento(){
        $data = array();
        $pais = $this->input->post('pais');
        $departamentos = $this->m_departamento->mostrar_cuando(array("t.pais_id" => $pais));
        if ($departamentos !== FALSE) {
            foreach ($departamentos as $p) {
                $data[] = array(
                    'id' => $p['id'],
                    'descripcion' => $p['nombre']
                );
            }
        }
        echo json_encode($data);
    }

    public function provincia(){
        $data = array();
        $departamento = $this->input->post('departamento');
        $provincias = $this->m_provincia->mostrar_cuando(array("t.departamento_id" => $departamento));
        if ($provincias !== FALSE) {
            foreach ($provincias as $p) {
                $data[] = array(
                    'id' => $p['id'],
                    'descripcion' => $p['nombre']
                );
            }
        }
        echo json_encode($data);
    }

    public function distrito(){
        $data = array();
        $provincia = $this->input->post('provincia');
        $distritos = $this->m_distrito->mostrar_cuando(array("t.provincia_id" => $provincia));
        if ($distritos !== FALSE) {
            foreach ($distritos as $d) {
                $data[] = array(
                    'id' => $d['id'],
                    'descripcion' => $d['nombre']
                );
            }
        }
        echo json_encode($data);
    }

}
