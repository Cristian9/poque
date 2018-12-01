<?php



require_once APPPATH . 'libraries/Modelo_DB.php';



class M_subasta extends Modelo_DB {



    public function __construct() {

        parent::__construct();

        parent::setTabla('subasta');

        parent::setAlias('t');

        parent::setTabla_id('id');

    }



    public function get_query() {

        $this->CI->db->select("t.id, t.codigo, t.descripcion, t.cliente_id, t.moneda_id, t.producto_id, t.precio_base, t.precio_reserva, t.precio_final, t.duracion, t.extencion, t.bases, t.tipo_descuento_id, t.descuento_minimo, t.f_inicio, t.f_disenio, t.f_bases, t.f_registro, t.tipo_subasta_id, t.estado_id, t.oculto,

            ts.nombre as tipo_subasta,

            e.nombre as estado,

            c.nombre as cliente,

            m.nombre as moneda, m.simbolo as moneda_simbolo,

            cat.id as categoria_id, cat.nombre as categoria,

            p.nombre as producto,

            td.nombre as tipo_descuento

            ");

        $this->CI->db->from($this->tabla . " " . $this->alias);

        $this->CI->db->join("tipo_subasta ts", "ts.id = t.tipo_subasta_id", "left");

        $this->CI->db->join("estado e", "e.id = t.estado_id");

        $this->CI->db->join("cliente c", "c.id = t.cliente_id");

        $this->CI->db->join("moneda m", "m.id = t.moneda_id", "left");

        $this->CI->db->join("producto p", "p.id = t.producto_id", "left");

        $this->CI->db->join("categoria cat", "cat.id = p.categoria_id", "left");

        $this->CI->db->join("tipo_descuento td", "td.id = t.tipo_descuento_id", "left");

        $this->CI->db->order_by("f_inicio", "ASC");

    }
    
    public function cantidad_subastas_mes($fecha = ""){
        if($fecha == ""){
            $fecha = date('Y-m-d');
        }
        $sql = "select * from subasta where MONTH(f_registro) = MONTH('" . $fecha . "') and YEAR(f_registro) = YEAR('" . $fecha . "')";
        $result =  $this->CI->db->query($sql)->result_array();
        return count($result);
        
    }



}

