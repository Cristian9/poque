<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_categoria extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('categoria');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select();
        $this->CI->db->from($this->tabla . " " . $this->alias);
    }

}
