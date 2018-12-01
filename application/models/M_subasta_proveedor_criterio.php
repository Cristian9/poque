<?php



require_once APPPATH . 'libraries/Modelo_DB.php';



class M_subasta_proveedor_criterio extends Modelo_DB {



    public function __construct() {

        parent::__construct();

        parent::setTabla('subasta_proveedor_criterio');

        parent::setAlias('t');

        parent::setTabla_id('id');

    }



    public function get_query() {

        $this->CI->db->select("t.id, t.puntaje, t.proveedor_id, t.criterio_id, t.subasta_id, t.oculto,

        	p.nombre as proveedor

        	");

        $this->CI->db->from($this->tabla . " " . $this->alias);

        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");

    }

    public function puntaje($subasta_id = "", $proveedor_id = ""){
        $this->CI->db->select_sum('puntaje');
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->get_where("t.proveedor_id", $proveedor_id);
        $this->get_where("t.subasta_id", $subasta_id);
        return $this->CI->db->get()->row_array();
    }



}

