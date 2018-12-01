<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_preguntas_frecuentes extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('pregunta_frecuente');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select();
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
