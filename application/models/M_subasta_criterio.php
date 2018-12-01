<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_subasta_criterio extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('subasta_criterio');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.valor, t.criterio_id, t.subasta_id, t.oculto,
            c.nombre as criterio
            ");
        $this->CI->db->join("criterio c", "c.id = t.criterio_id");
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
