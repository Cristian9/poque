<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_proveedor_producto extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('proveedor_producto');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.producto_id, t.proveedor_id, t.oculto,
            p.nombre as producto,
            c.nombre as categoria
            ");
        $this->CI->db->join("producto p", "p.id = t.producto_id");
        $this->CI->db->join("categoria c", "c.id = p.categoria_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
