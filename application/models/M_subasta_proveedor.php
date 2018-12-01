<?php



require_once APPPATH . 'libraries/Modelo_DB.php';



class M_subasta_proveedor extends Modelo_DB {



    public function __construct() {

        parent::__construct();

        parent::setTabla('subasta_proveedor');

        parent::setAlias('t');

        parent::setTabla_id('id');

    }



    public function get_query() {

        $this->CI->db->select("t.id, t.alias, t.proveedor_id, t.subasta_id, t.oculto,

            p.nombre as proveedor,

            ");

        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");

        $this->CI->db->from($this->tabla . " " . $this->alias);

    }

    public function subastas_proveedor($proveedor_id){
        $this->CI->db->select();
        $this->CI->db->join("subasta s", "s.id = t.subasta_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->get_where("t.proveedor_id", $proveedor_id);
        $this->get_where("date(s.f_inicio)", date("Y-m-d"));
        return $this->CI->db->get()->result_array();
    }



}

