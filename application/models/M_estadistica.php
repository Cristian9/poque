<?php

class M_estadistica extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function proveedor_por_sector(){
        $sql="select s.id as id, s.nombre as sector, count(r.sector_id) as cantidad from proveedor p inner join rubro r on r.id = p.rubro_id inner join sector s on s.id = r.sector_id group by s.id";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function cliente_por_sector(){
        $sql="select s.id as id, s.nombre as sector, count(r.sector_id) as cantidad from cliente c inner join rubro r on r.id = c.rubro_id inner join sector s on s.id = r.sector_id group by s.id";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function subasta_por_categoria(){
        $sql="SELECT s.id, c.nombre as categoria, COUNT(c.id) as cantidad FROM subasta s 
            INNER JOIN producto p on p.id = s.producto_id
            INNER JOIN categoria c on c.id = p.categoria_id
            GROUP BY c.id";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function subasta_precio_final_por_mes($fecha = ""){
        if($fecha == ""){
           $fecha = date("Y-m-d"); 
        }
        $sql="SELECT s.id, s.codigo, (s.precio_final * s.tipo_cambio) as precio_final, s.f_inicio FROM subasta s
            WHERE MONTH(s.f_inicio) = MONTH('" . $fecha . "') 
            AND YEAR(s.f_inicio) = YEAR('" . $fecha . "')";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function subasta_ahorro_por_mes($fecha = ""){
        if($fecha == ""){
           $fecha = date("Y-m-d"); 
        }
        $sql="SELECT s.id, s.codigo, (s.precio_final * s.tipo_cambio) as precio_final, ((s.precio_base - s.precio_final) * s.tipo_cambio) as ahorro, s.f_inicio FROM subasta s
            WHERE MONTH(s.f_inicio) = MONTH('" . $fecha . "') 
            AND YEAR(s.f_inicio) = YEAR('" . $fecha . "')";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    public function subasta_monto_por_mes($fecha = ""){
        if($fecha == ""){
           $fecha = date("Y-m-d"); 
        }
        $sql="SELECT s.id, s.codigo, p.nombre as producto, (s.precio_final * s.tipo_cambio) as precio_final, ((s.precio_base - s.precio_final) * s.tipo_cambio) as ahorro, s.f_inicio FROM subasta s INNER JOIN producto p ON p.id = s.producto_id
            WHERE MONTH(s.f_inicio) = MONTH('" . $fecha . "') 
            AND YEAR(s.f_inicio) = YEAR('" . $fecha . "')
            AND s.f_inicio < '" . $fecha . "'";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    //AHORRO POR CATEGORIA
    public function subasta_ahorro_anual_por_categoria($fecha = ""){
        if($fecha == ""){
           $fecha = date("Y-m-d"); 
        }
        $sql="SELECT c.nombre as categoria,
            SUM(CASE WHEN MONTH(s.f_inicio) = 1 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Enero',
            SUM(CASE WHEN MONTH(s.f_inicio) = 2 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Febrero',
            SUM(CASE WHEN MONTH(s.f_inicio) = 3 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Marzo',
            SUM(CASE WHEN MONTH(s.f_inicio) = 4 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Abril',
            SUM(CASE WHEN MONTH(s.f_inicio) = 5 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Mayo',
            SUM(CASE WHEN MONTH(s.f_inicio) = 6 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Junio',
            SUM(CASE WHEN MONTH(s.f_inicio) = 7 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Julio',
            SUM(CASE WHEN MONTH(s.f_inicio) = 8 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Agosto',
            SUM(CASE WHEN MONTH(s.f_inicio) = 9 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Setiembre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 10 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Octubre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 11 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Noviembre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 12 THEN (s.precio_base - s.precio_final) * s.tipo_cambio ELSE 0 END) AS 'Diciembre'
            FROM subasta s
            INNER JOIN producto p on p.id = s.producto_id
            INNER JOIN categoria c on c.id = p.categoria_id
            WHERE YEAR(s.f_inicio)  = YEAR('" . $fecha . "')
            AND s.f_inicio < '" . $fecha . "'
            GROUP BY c.id";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }

    //PRECIO FINAL POR CATEGORIA
    public function subasta_precio_final_anual_por_categoria($fecha = ""){
        if($fecha == ""){
           $fecha = date("Y-m-d"); 
        }
        $sql="SELECT c.nombre as categoria,
            SUM(CASE WHEN MONTH(s.f_inicio) = 1 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Enero',
            SUM(CASE WHEN MONTH(s.f_inicio) = 2 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Febrero',
            SUM(CASE WHEN MONTH(s.f_inicio) = 3 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Marzo',
            SUM(CASE WHEN MONTH(s.f_inicio) = 4 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Abril',
            SUM(CASE WHEN MONTH(s.f_inicio) = 5 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Mayo',
            SUM(CASE WHEN MONTH(s.f_inicio) = 6 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Junio',
            SUM(CASE WHEN MONTH(s.f_inicio) = 7 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Julio',
            SUM(CASE WHEN MONTH(s.f_inicio) = 8 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Agosto',
            SUM(CASE WHEN MONTH(s.f_inicio) = 9 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Setiembre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 10 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Octubre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 11 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Noviembre',
            SUM(CASE WHEN MONTH(s.f_inicio) = 12 THEN s.precio_final * s.tipo_cambio ELSE 0 END) AS 'Diciembre'
            FROM subasta s
            INNER JOIN producto p on p.id = s.producto_id
            INNER JOIN categoria c on c.id = p.categoria_id
            WHERE YEAR(s.f_inicio)  = YEAR('" . $fecha . "')
            AND s.f_inicio < '" . $fecha . "'
            GROUP BY c.id";
        $result =  $this->db->query($sql)->result_array();
        if (count($result) > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }


}
