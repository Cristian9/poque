<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_subasta_pregunta extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('subasta_pregunta');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.id, t.pregunta, t.respuesta, t.f_registro, t.usuario_id, t.subasta_id, t.oculto,
        u.usuario as usuario
        ");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->join("usuario u", "u.id = t.usuario_id");
    }

}
