<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_subasta_puja extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('subasta_puja');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.monto, t.f_registro, t.proveedor_id, t.subasta_id, t.oculto,
            p.nombre as proveedor,
            ");
        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->order_by("t.id", "ASC");
    }

    public function ultima_puja_proveedor($id = "", $p_id = ""){
        $this->CI->db->select('p.id as proveedor_id');
        $this->CI->db->select_min('t.monto');
        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->get_where('t.subasta_id', $id);
        $this->get_where('t.proveedor_id', $p_id);
        return $this->CI->db->get()->row_array();
    }

    public function ultima_puja($id = '')
    {
        $this->CI->db->select('p.id as proveedor_id, p.nombre as proveedor');
        $this->CI->db->select_min('t.monto');
        $this->CI->db->join("proveedor p", "p.id = t.proveedor_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->get_where('t.subasta_id', $id);
        return $this->CI->db->get()->row_array();
    }

}
