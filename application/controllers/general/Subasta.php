<?php







@session_cache_limiter('private, must-revalidate');



@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");



@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");



@header("Cache-Control: no-store, no-cache, must-revalidate");



@header("Cache-Control: post-check=0, pre-check=0", FALSE);



@header("Pragma: no-cache");







class Subasta extends CI_Controller {







    private $items = array();







    public function __construct() {



        parent::__construct();



        /*



         * Configuración para modelos



         */



        $model = array('m_subasta', 'm_subasta_puja', 'm_subasta_proveedor', 'm_subasta_proveedor_puntaje', 'm_subasta_historial_puja', 'm_proveedor');



        $this->load->model($model);



    }







    //ESTADISTICA



    public function estadistica_completa($id = ""){
        $proveedores = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));
        $horas_puja = $this->m_subasta_historial_puja->horas(array("t.subasta_id" => $id));

        $nombre = array();
        $grafica_pujas = array();
        $grafica_pujas_horas = array();
        $nombre[] = "Pujas";
        foreach ($horas_puja as $hora) {
            $provee = $this->m_proveedor->mostrar('t.id', $hora['proveedor_id']);
            // $grafica_pujas_horas[] = $hora['hora'] . "(" . $provee['nombre'] . ")";
            $grafica_pujas_horas[] = $hora['hora'];

            $provee_al = $this->m_subasta_proveedor->mostrar(array('t.proveedor_id'=> $hora['proveedor_id'], 't.subasta_id' => $id));
            $grafica_pujas_horas_al[] = $hora['hora'] . "(" . $provee_al['alias'] . ")";

            $grafica_pujas[] = $hora['puja'];
        }

        $grafica_proveedor = array();
        $grafica_precio = array();
        $i = 0;
        $prov = array();
        $hor = array();

        foreach ($proveedores as $p) {
            $pro_al = $this->m_subasta_proveedor->mostrar(array('t.proveedor_id'=> $p['proveedor_id'], 't.subasta_id' => $id));

            $pro = $this->m_proveedor->mostrar('t.id', $p['proveedor_id']);
            //$prov[] = $pro['nombre'];
            $prov[] = $pro_al['alias'];
            foreach ($horas_puja as $hp) {
                if($i == 0){
                    $hor[] = $hp['hora'];
                }
                $historial = $this->m_subasta_historial_puja->mostrar(array("subasta_id" => $id, "hora" => $hp['hora'], "proveedor_id" => $p['proveedor_id']));
                $grafica_proveedor[$i][] = $historial['puntaje'];
                $grafica_precio[$i][] = $historial['puja'];
            }
            $i++;
        }
        $data[0] = $prov;
        $data[1] = $hor;
        $data[2] = $grafica_proveedor;
        $data[3] = $grafica_precio;

        $data[4] = $nombre; // grafica puja en el tiempo
        $data[5] = $grafica_pujas; // grafica puja en el tiempo
        $data[6] = $grafica_pujas_horas; // grafica puja en el tiempo
        $data[7] = $grafica_pujas_horas_al;

        $data = json_encode($data);
        echo $data;
    }



    public function hora_pujas($id = ""){



        $proveedores = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));



        $horas_puja = $this->m_subasta_historial_puja->horas(array("t.subasta_id" => $id), 10);



        $grafica_proveedor = array();



        $grafica_precio = array();



        $i = 0;



        $prov = array();



        $hor = array();



        foreach ($proveedores as $p) {



            $prov[] = $p['alias'];



            foreach ($horas_puja as $hp) {



                if($i == 0){



                    $hor[] = $hp['hora'];



                }



                $historial = $this->m_subasta_historial_puja->mostrar(array("subasta_id" => $id, "hora" => $hp['hora'], "proveedor_id" => $p['proveedor_id']));



                $grafica_proveedor[$i][] = $historial['puntaje'];



                $grafica_precio[$i][] = $historial['puja'];



            }



            $i++;



        }



        //var_dump($grafica_proveedor);



        $data[0] = $prov;



        $data[1] = $hor;



        $data[2] = $grafica_proveedor;



        $data[3] = $grafica_precio;







        $data = json_encode($data);



        echo $data;







    }



    //TEMPORAL CHARTS



    public function chart(){



        $data[] = array(rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3));



        $data[] = array(rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3));



        $data[] = array(rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3), rand(1, 3));



        $data = json_encode($data);







        echo $data;



    }



    //FIN ESTADISTICA







    public function puja($id = ""){

        $data = $this->m_subasta_puja->mostrar_cuando(array("t.subasta_id" => $id));

        for ($i=0; $i < count($data); $i++) {

            $prov = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $data[$i]['proveedor_id']));

            $data[$i]['alias'] = $prov['alias'];
            $data[$i]['monto'] = number_format($data[$i]['monto'], 2, ".", ",");

        }

        $data = json_encode($data);

        echo $data;

    }







    public function info($id = ""){







        $data = $this->m_subasta->mostrar('t.id', $id);



        $ultima_puja = $this->m_subasta_puja->ultima_puja($id);



        $data['ultima_puja'] = $ultima_puja['monto'] != '' ? $ultima_puja['monto'] : $data['precio_base'];

        $data['ultima_puja'] = number_format($data['ultima_puja'], 2, '.', ',');



        $data = json_encode($data);







        echo $data;







    }





    public function tiempo($id = ""){

        $subasta = $this->m_subasta->mostrar('t.id', $id);

        $estado = $subasta['estado_id'];

        $duracion = $subasta['duracion'] * 60;

        $start_ts = strtotime($subasta['f_inicio']);

        $end_ts = strtotime(date("Y-m-d H:i:s"));

        $tiempo_limite = $start_ts + $duracion;

        $seg = $end_ts - $start_ts;

        $seg1 = $tiempo_limite - $end_ts;

        $ejecucion = TRUE;

        if($seg < 0){//SI AUN NO INICIA

            $ejecucion = FALSE;

        }else if($tiempo_limite < $end_ts){//SI YA TERMINO

            $ejecucion = FALSE;

            if($subasta['estado_id'] == 2){

                $ultima_puja = $this->m_subasta_puja->ultima_puja($id);

                if($ultima_puja['monto'] == ''){
                    $this->m_subasta->actualizar(array('estado_id' => 5), $id);
                }else{
                    $this->m_subasta->actualizar(array('estado_id' => 3), $id);
                }



                $estado = 3;

            }

        }else{ //EN EJECUCION

            if($subasta['estado_id'] == 1){

                $this->m_subasta->actualizar(array('estado_id' => 2), $id);

                $estado = 2;

            }

        }

        $horas = floor($seg1 / 3600);

        $seg1 = $seg1 % 3600;

        $minutos = floor($seg1 / 60);

        $seg1 = $seg1 % 60;

        $segundos = $seg1;

        $data = array(

            'ejecucion' => $ejecucion,

            'estado' => $estado,

            'horas' => str_pad($horas, 2, 0, STR_PAD_LEFT),

            'minutos' => str_pad($minutos, 2, 0, STR_PAD_LEFT),

            'segundos' => str_pad($segundos, 2, 0, STR_PAD_LEFT),

            'total' => $subasta['duracion']

            );

        $data = json_encode($data);

        echo $data;

    }


    public function tiempo1($id = ""){

        $subasta = $this->m_subasta->mostrar('t.id', $id);

        $estado = $subasta['estado_id'];

        $duracion = $subasta['duracion'] * 60;

        $start_ts = strtotime($subasta['f_inicio']);

        $end_ts = strtotime(date("Y-m-d H:i:s"));

        $tiempo_limite = $start_ts + $duracion;

        $seg = $end_ts - $start_ts;

        $ejecucion = TRUE;



        if($seg < 0){//SI AUN NO INICIA

            $ejecucion = FALSE;

        }else if($tiempo_limite < $end_ts){//SI YA TERMINO

            $ejecucion = FALSE;

            if($subasta['estado_id'] == 2){

                $ultima_puja = $this->m_subasta_puja->ultima_puja($id);

                if($ultima_puja['monto'] == ''){
                    $this->m_subasta->actualizar(array('estado_id' => 5), $id);
                }else{
                    $this->m_subasta->actualizar(array('estado_id' => 3), $id);
                }



                $estado = 3;

            }

        }else{ //EN EJECUCION

            if($subasta['estado_id'] == 1){

                $this->m_subasta->actualizar(array('estado_id' => 2), $id);

                $estado = 2;

            }

        }

        $horas = floor($seg / 3600);

        $seg = $seg % 3600;

        $minutos = floor($seg / 60);

        $seg = $seg % 60;

        $segundos = $seg;

        $data = array(

            'ejecucion' => $ejecucion,

            'estado' => $estado,

            'horas' => $horas,

            'minutos' => $minutos,

            'segundos' => $segundos,

            'total' => $subasta['duracion']

            );

        $data = json_encode($data);

        echo $data;

    }







    public function proveedores($id = ""){

        $data = $this->m_subasta_proveedor_puntaje->mostrar_cuando(array("subasta_id" => $id));

        for ($i=0; $i < count($data); $i++) {

            $prov = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $data[$i]['proveedor_id']));

            $puja = $this->m_subasta_puja->ultima_puja_proveedor($id, $data[$i]['proveedor_id']);

            $pujas = $this->m_subasta_puja->mostrar_cuando(array("subasta_id" => $id, "proveedor_id" => $data[$i]['proveedor_id']));

            $data[$i]['alias'] = $prov['alias'];

            $data[$i]['puja'] = $puja['monto'] != "" ? number_format($puja['monto'], 2, ".", ",") : "-";

            $data[$i]['cant_puja'] = count($pujas);

        }

        $data = json_encode($data);

        echo $data;

    }



}
