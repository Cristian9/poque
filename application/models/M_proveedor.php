<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_proveedor extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('proveedor');
        parent::setAlias('t');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("t.id, t.codigo, t.nombre, t.n_documento, t.email, t.contacto, t.telefono, t.anexo, t.celular, t.logo, t.direccion, t.f_registro, t.tipo_documento_id, t.rubro_id, t.distrito_id, t.usuario_id, t.oculto,
            r.nombre as rubro,
            s.id as sector_id, s.nombre as sector,
            d.nombre as distrito,
            p.id as provincia_id, p.nombre as provincia,
            dep.id as departamento_id, dep.nombre as departamento
            ");
        $this->CI->db->from($this->tabla . " " . $this->alias);
        $this->CI->db->join("rubro r", "r.id = t.rubro_id");
        $this->CI->db->join("sector s", "s.id = r.sector_id");
        $this->CI->db->join("distrito d", "d.id = t.distrito_id");
        $this->CI->db->join("provincia p", "p.id = d.provincia_id");
        $this->CI->db->join("departamento dep", "dep.id = p.departamento_id");
    }

}
