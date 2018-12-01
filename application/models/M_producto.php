<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_producto extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('producto');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.nombre, t.categoria_id, t.oculto,
            c.nombre as categoria
            ");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->join("categoria c", "c.id = t.categoria_id");
        $this->CI->db->order_by("t.nombre", "ASC");
    }

}
