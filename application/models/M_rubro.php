<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_rubro extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('rubro');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select();
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
