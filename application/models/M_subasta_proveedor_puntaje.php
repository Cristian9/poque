<?php



require_once APPPATH . 'libraries/Modelo_DB.php';



class M_subasta_proveedor_puntaje extends Modelo_DB {



    public function __construct() {

        parent::__construct();

        parent::setTabla('subasta_proveedor_puntaje');

        parent::setAlias('t');

        parent::setTabla_id('id');

    }



    public function get_query() {

        $this->CI->db->select("t.id, t.proveedor_id, t.subasta_id, t.p_criterios, t.puntaje, t.puesto, t.oculto,

            p.codigo as p_codigo, p.nombre as proveedor,

            ");

        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");

        $this->CI->db->from($this->tabla . " " . $this->alias);

        $this->CI->db->order_by("t.puntaje", "DESC");

    }



}

