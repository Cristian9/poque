<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_departamento extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('departamento');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select();
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
