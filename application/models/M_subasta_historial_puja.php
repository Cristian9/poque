<?php



require_once APPPATH . 'libraries/Modelo_DB.php';



class M_subasta_historial_puja extends Modelo_DB {



    public function __construct() {

        parent::__construct();

        parent::setTabla('subasta_historial_puja');

        parent::setAlias('t');

        parent::setTabla_id('id');

    }



    public function get_query() {

        $this->CI->db->select();

        $this->CI->db->from($this->tabla . " " . $this->alias);

    }



    public function horas($where, $limite = FALSE, $offset = FALSE){

        $this->get_query();

        $this->get_where($where);

        $this->CI->db->order_by("id", "ASC");

        $this->CI->db->group_by("hora");

        if ($limite) {

            return $this->CI->db->limit($limite, $offset)->get()->result_array();

        } else {

            return $this->CI->db->get()->result_array();

        }

    }



}

