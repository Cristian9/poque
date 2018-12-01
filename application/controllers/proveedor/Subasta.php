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

         * Configuración para librerias, helpers y modelos

         */



        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo');



        $helper = array('url', 'mantenimiento', 'fecha');



        $model = array('m_usuario', 'm_subasta', 'm_departamento', 'm_provincia', 'm_distrito', 'm_criterio', 'm_tipo_descuento', 'm_proveedor', 'm_cliente', 'm_producto', 'm_subasta_proveedor','m_subasta_criterio', 'm_subasta_puja', 'm_moneda', 'm_categoria', 'm_proveedor_criterio', 'm_subasta_proveedor_puntaje', 'm_subasta_historial_puja', 'm_subasta_proveedor_criterio');



        $this->load->library($library);



        $this->load->helper($helper);



        $this->load->model($model);



        /*



         * Configuración personalizada



         */



        $this->items['base_url'] = base_url();



        $this->items['panel_url'] = base_url() . "proveedor/";



        $this->items['get_url'] = base_url() . "proveedor/subasta/";



        $this->items['active'] = "subasta";



        $this->items['modulo'] = "subasta";







        /*



         * Datos de la sesion



         */



        $this->session_comp->verificar_logueo('u_proveedor', 'proveedor');



        $this->_session = $this->session_comp->datos_usuario('u_proveedor');      



        $this->items['usuario'] = $this->m_usuario->mostrar('id', $this->_session->sys_id);



        $this->items['proveedor'] = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);



        $this->items['session'] = array(



            'id' => $this->_session->sys_id,



            'user_id' => $this->items['proveedor']['id'],



            'usuario' => $this->_session->sys_usuario,



            'nivel' => $this->_session->sys_nivel,



            'nombre' => $this->items['usuario']['nombre']



            );

        $this->items['menu'] = $this->smarty_tpl->view('proveedor/menu', $this->items, true);
        $this->items['menu2'] = $this->smarty_tpl->view('proveedor/menu_top', $this->items, true);



    }



    public function listar(){



        $data['titulo_pagina'] = 'Listar subasta';



        $data['pagina'] = 'Listar subasta';



        /* ------------------------------------------------------------ */



        $data['lista'] = array();



        $data['agregar'] = FALSE;

        $data['buttons'] = '<span data-toggle="tooltip" title="" data-original-title="Ingresar a subasta"><a class="btn btn-blue1" data-toggle="modal" title="Ingresar a Subasta" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar a subasta</a></span>';



        $proveedor = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);



        $subastas = $this->m_subasta_proveedor->mostrar_cuando(array("proveedor_id" => $proveedor['id']));



        foreach ($subastas as $s) {



            $data['lista'][] = $this->m_subasta->mostrar('t.id', $s['subasta_id']);



        }



        $data['tabla'] = $this->smarty_tpl->view('proveedor/subasta_tabla', $data, true);



        /* ------------------------------------------------------------ */



        $data = array_merge($data, $this->items);



        $this->smarty_tpl->view('plantilla/header', $data);



        $this->smarty_tpl->view('plantilla/p_lista', $data);



        $this->smarty_tpl->view('plantilla/footer', $data);



    }





    public function observar($id = ""){



        $data['titulo_pagina'] = 'Diseño de subasta';



        $data['pagina'] = 'Diseño de subasta';



        $data = array_merge($data, $this->items);



        /* ------------------------------------------------------------ */



        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));



        $data['registro']['ahorro_monto'] = $data['registro']['precio_base'] - $data['registro']['precio_reserva'];

        

        $data['registro']['ahorro_porcentaje'] = $data['registro']['ahorro_monto'] * 100 / $data['registro']['precio_base'];



        $data['tipo_descuentos'] = $this->m_tipo_descuento->mostrar_activos();



        $data['criterios'] = $this->m_criterio->mostrar_activos();



        $data['proveedores'] = $this->m_proveedor->mostrar_activos();



        $data['clientes'] = $this->m_cliente->mostrar_activos();



        $data['monedas'] = $this->m_moneda->mostrar_activos();



        $data['categorias'] = $this->m_categoria->mostrar_activos();



        $data['productos'] = $this->m_producto->mostrar_cuando(array("categoria_id" => $data['registro']['categoria_id'], "t.oculto" => 0));





        $data['s_proveedores'] = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $data['s_criterios'] = $this->m_subasta_criterio->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $data['total'] = 0;

        $i = 0;

        foreach ($data['s_criterios'] as $c) {



            $data['total'] += $c['valor'];



            $prov = $this->m_subasta_proveedor_criterio->mostrar_cuando(array("subasta_id" => $id, "criterio_id" => $c['criterio_id']));

            $data['s_criterios'][$i]['proveedores'] = $prov;

            $i++;



        }





        $data['detalle'] = $this->smarty_tpl->view('proveedor/subasta_detalle', $data, true);



        /* ------------------------------------------------------------ */



        $this->smarty_tpl->view('plantilla/header', $data);



        $this->smarty_tpl->view('plantilla/p_observar', $data);



        $this->smarty_tpl->view('plantilla/footer', $data);



    }

    public function pregunta($id = ""){
        $data['titulo_pagina'] = 'Preguntas de la subasta';
        $data['pagina'] = 'Preguntas de la subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $this->load->model('m_subasta_pregunta');
        $data['id'] = $id;
        $data['preguntas'] = $this->m_subasta_pregunta->mostrar_cuando(array("subasta_id" => $id, "usuario_id" => $this->_session->sys_id));
        $data['contenido'] = $this->smarty_tpl->view('proveedor/subasta_pregunta', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_vacio', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function agregar_pregunta(){
        $id = $this->input->post('id');
        $pregunta = $this->input->post('pregunta');

        $error = '';        
        $error .= $this->mantenimiento->validacion($pregunta, 'required|maxlenght[255]', 'Pregunta');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        $info['pregunta'] = $pregunta;
        $info['respuesta'] = "Respuesta pendiente...";
        $info['subasta_id'] = $id;
        $info['usuario_id'] = $this->_session->sys_id;
        $info['f_registro'] = date("Y-m-d H:i:s");
        $this->load->model('m_subasta_pregunta');
        $resultSet = $this->m_subasta_pregunta->insertar($info);
        if($resultSet !== FALSE){
            //ENVIO DE CORREO


            echo $this->alerta->mensaje_exito('Registro exitoso');
            echo $this->url_comp->actualizar_tiempo(3000);
        }else{
            echo $this->alerta->mensaje_error('Ah ocurrio un error');
        }
    }



    public function resultado($id = ""){



        $data['titulo_pagina'] = 'Resultado subasta';



        $data['pagina'] = 'Resultado subasta';



        $data = array_merge($data, $this->items);



        $this->load->model('m_subasta_puja');

        /* ------------------------------------------------------------ */



        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));
        $data['registro']['hora_cierre'] = date('Y-m-d H:i:s', strtotime ('+' . $data['registro']['duracion'] . ' minute', strtotime($data['registro']['f_inicio'])));

        $data['registro']['ahorro_monto'] = $data['registro']['precio_base'] - $data['registro']['precio_reserva'];

        $data['registro']['ahorro_porcentaje'] = $data['registro']['ahorro_monto'] * 100 / $data['registro']['precio_base'];

        $data['id'] = $id;

        $ganador = $this->m_subasta_proveedor_puntaje->mostrar(array("t.subasta_id" => $id, "t.puesto" => 1));
        $proveedor = $this->m_subasta_proveedor->mostrar(array("t.subasta_id" => $id, "t.proveedor_id" => $ganador['proveedor_id']));
        $horas = $this->m_subasta_historial_puja->horas(array('subasta_id' => $id));
        

        $ultima_puja = $this->m_subasta_puja->ultima_puja($id);

        $data['registro']['ultima_puja'] = $ultima_puja['monto'];

        $data['registro']['ganador'] = $ganador;

        $data['registro']['n_pujas'] = count($horas);

        $data['registro']['ganador']['alias'] = $proveedor['alias'];
        $data['registro']['ganador']['hora_oferta'] = $horas[$data['registro']['n_pujas'] - 1]['hora'];



        $proveedores = $this->m_subasta_proveedor_puntaje->mostrar_cuando(array("subasta_id" => $id));



        for ($i=0; $i < count($proveedores); $i++) {



            $prov = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $proveedores[$i]['proveedor_id']));



            $puja = $this->m_subasta_puja->ultima_puja_proveedor($id, $proveedores[$i]['proveedor_id']);



            $pujas = $this->m_subasta_puja->mostrar_cuando(array("subasta_id" => $id, "proveedor_id" => $proveedores[$i]['proveedor_id']));



            $proveedores[$i]['alias'] = $prov['alias'];



            $proveedores[$i]['puja'] = $puja['monto'] != "" ? $puja['monto'] : "-";



            $proveedores[$i]['cant_puja'] = count($pujas);



        }



        $data['proveedores'] = $proveedores;



        $data['contenido'] = $this->smarty_tpl->view('manager/subasta_resultado', $data, true);



        /* ------------------------------------------------------------ */



        $this->smarty_tpl->view('plantilla/header', $data);



        $this->smarty_tpl->view('plantilla/p_vacio', $data);



        $this->smarty_tpl->view('plantilla/footer', $data);



    }



    public function codigo(){

        $codigo = $this->input->post('codigo');

        $subasta = $this->m_subasta->mostrar(array("t.codigo" => $codigo));

        $subasta_proveedor = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $subasta['id'], "proveedor_id" => $this->items['proveedor']['id']));

        if(count($subasta_proveedor) > 0){

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listado/' . $subasta['id'], TRUE);

        }else{

            echo $this->alerta->mensaje_error('El código ingresado no es válido');

        }

    }





    //PROCESO DE SUBASTA

    public function listado($id = ""){

        $data['titulo_pagina'] = 'Listar proveedor';

        $data['pagina'] = 'Listar proveedor';

        $data['base_url'] = base_url();

        /* ------------------------------------------------------------ */



        $user = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);



        $data['id'] = $id;



        $data['prov'] = $this->m_subasta_proveedor->mostrar(array("t.proveedor_id" => $user['id'], "t.subasta_id" => $id));



        if(count($data['prov']) == 0){

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

            EXIT;

        }



        $data['subasta'] = $this->m_subasta->mostrar('t.id', $id);

        $proveedores = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));

        $data['parcicipantes'] = count($proveedores);



        //$data['subasta'] = $this->smarty_tpl->view('manager/prueba_angular', $data, true);



        /* ------------------------------------------------------------ */



        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('proveedor/subasta_ejecucion', $data);

        //$this->smarty_tpl->view('plantilla/header', $data);

        //$this->smarty_tpl->view('plantilla/p_subasta', $data);

        //$this->smarty_tpl->view('plantilla/footer', $data);

    }





    public function ofertar(){

        $oferta = $this->input->post('oferta');

        $subasta = $this->input->post('subasta');

        

        //VALIDACION DE CAMPOS

        $error = '';

        $error .= $this->mantenimiento->validacion($oferta, 'required|decimal', 'Oferta');

        if ($error != '') {

            echo $this->alerta->mensaje_error($error, TRUE);

            EXIT;

        }



        //VALIDARA PUJA

        $info_subasta = $this->m_subasta->mostrar("t.id", $subasta);

        //ULTIMA PUJA

        $ultima_puja = $this->m_subasta_puja->ultima_puja($subasta);

        $ultima_puja = $ultima_puja['monto'] != '' ? $ultima_puja['monto'] : $info_subasta['precio_base'];



        if($info_subasta['tipo_descuento_id'] == 1){ // monto

            $descuento_minimo = $info_subasta['descuento_minimo'];

        }else{

            $descuento_minimo = $ultima_puja * $info_subasta['descuento_minimo'] / 100;

        }

        

        if($oferta == $ultima_puja){

            echo $this->alerta->mensaje_error("El monto de <b>'" . $oferta . "'</b> ya fue ofertado", TRUE);

            EXIT;

        }



        if($oferta >= $ultima_puja){

            echo $this->alerta->mensaje_error("El monto ofertado supera el precio actual", TRUE);

            EXIT;

        }

        if($ultima_puja - $oferta < $descuento_minimo){
            
            if($info_subasta['tipo_descuento_id'] == 1){
                echo $this->alerta->mensaje_error("El monto de <b>'" . $oferta . "'</b> no cumple con el descuento mínimo de '<b>" . $info_subasta['moneda_simbolo'] . $descuento_minimo . "</b>', ingrese un monto diferente", TRUE);
            }else{
                echo $this->alerta->mensaje_error("El monto de <b>'" . $oferta . "'</b> no cumple con el descuento mínimo de '<b>" . $info_subasta['moneda_simbolo'] . $descuento_minimo . "' (" . $info_subasta['descuento_minimo'] . "%) </b>, ingrese un monto diferente", TRUE);
            }
            

            EXIT;

        }



        //INSERTAR LA PUJA

        $info['monto'] = $oferta;

        $info['proveedor_id'] = $this->items['session']['user_id'];

        $info['subasta_id'] = $subasta;

        $info['f_registro'] = date("Y-m-d H:i:s");

        $resultSet = $this->m_subasta_puja->insertar($info);

		//RECALCULAR EL TIEMPO DE LA SUBASTA

		$duracion = $info_subasta['duracion'] * 60;

        $start_ts = strtotime($info_subasta['f_inicio']); 

        $end_ts = strtotime(date("Y-m-d H:i:s")); 

        $tiempo_limite = $start_ts + $duracion;

        $min = ($tiempo_limite - $end_ts) / 60;

        if($min <= $info_subasta['extencion']){

        	$new_info_subasta['duracion'] = $info_subasta['duracion'] + 5;

        	$this->m_subasta->actualizar($new_info_subasta, $subasta);

        }







        //Obtener valor del criterio precio

        $pp = $this->m_subasta_criterio->mostrar(array("t.criterio_id" => 1, "t.subasta_id" => $subasta));

        $porcentaje_precio = $pp['valor'];

        

        //Obtener datos de la subasta

        $info_subasta = $this->m_subasta->mostrar("t.id", $subasta);

        $precio_base = $info_subasta['precio_base'];

        $dif_mayor = $precio_base - $oferta;

        



        //Obtener todos los proveedores de la subasta

        $subasta_proveedor = $this->m_subasta_proveedor->mostrar_cuando(array("t.subasta_id" => $subasta));

        foreach ($subasta_proveedor as $p) {

            //Obtener ultima puja del proveedor

            $subasta_puja = $this->m_subasta_puja->ultima_puja_proveedor($subasta, $p['proveedor_id']);

            $puja = $subasta_puja['monto'];



            if($puja != ""){ // Si ha pujado al menos una ves

                $dif = $precio_base - $puja;

                $puntaje_precio = $dif * $porcentaje_precio / $dif_mayor;



                //Obtener puntaje criterios

                $subasta_proveedor_puntaje = $this->m_subasta_proveedor_puntaje->mostrar(array("proveedor_id" => $p['proveedor_id'], "subasta_id" => $subasta));

                $puntaje_criterio = $subasta_proveedor_puntaje['p_criterios'];



                //Definir puntaje total

                $data['puntaje'] = $puntaje_criterio + $puntaje_precio;

                

                $this->m_subasta_proveedor_puntaje->actualizar($data, $subasta_proveedor_puntaje['id']);

            }

        }



        //ORDENAR POSICIONES

        //Obtener proveedores segun su posicion actual

        $proveedores = $this->m_subasta_proveedor_puntaje->mostrar_cuando(array("subasta_id" => $subasta));

        $i = 1;

        $historial['subasta_id'] = $subasta;

        foreach ($proveedores as $p) {

            $historial['puntaje'] = $p['puntaje'];

            $prov_ult_puja = $this->m_subasta_puja->ultima_puja_proveedor($subasta, $p['proveedor_id']);

            if($prov_ult_puja['monto'] != ""){ // Si ha pujado al menos una ves

                $prov_punt_info['puesto'] = $i;

                $historial['puesto'] = $i;

                if($i == 1){

                    //ACTUALIZAR PRECIO FINAL DE LA SUBASTA

                    $this->m_subasta->actualizar(array('precio_final' => $prov_ult_puja['monto']), $subasta);

                }

                $i++;

            }else{

                $prov_punt_info['puesto'] = "-";

                $historial['puesto'] = "-";

            }

            //ACTUALIZAR PUESTO DE TABLA PUNTAJE

            $this->m_subasta_proveedor_puntaje->actualizar($prov_punt_info, $p['id']);

            //AGREGAR HISTORIAL

            $historial['puja'] = $prov_ult_puja['monto'] != "" ? $prov_ult_puja['monto'] : "-";

            $historial['hora'] = date("H:i:s", strtotime($info['f_registro']));

            $historial['proveedor_id'] = $p['proveedor_id'];

            $this->m_subasta_historial_puja->insertar($historial);

        }





    }



/*

    public function listado_puja($id = ""){



        //$data = $this->m_subasta_puja->mostrar_cuando(array("t.subasta_id" => $id));



        $data = $this->m_subasta_puja->mostrar_cuando(array("t.subasta_id" => $id));

        for ($i=0; $i < count($data); $i++) {

            $prov = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $data[$i]['proveedor_id']));

            $data[$i]['alias'] = $prov['alias'];

        }



        $data = json_encode($data);



        echo $data;



    }



    public function listado_subasta($id = ""){



        $data = $this->m_subasta->mostrar('t.id', $id);

        $ultima_puja = $this->m_subasta_puja->ultima_puja($id);

        $data['ultima_puja'] = $ultima_puja['monto'] != '' ? $ultima_puja['monto'] : $data['precio_base'];

        $data = json_encode($data);



        echo $data;



    }



    public function listado_proveedores($id = ""){



        //$data = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));

        $data = $this->m_subasta_proveedor_puntaje->mostrar_cuando(array("subasta_id" => $id));

        for ($i=0; $i < count($data); $i++) {

            $prov = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $data[$i]['proveedor_id']));

            $puja = $this->m_subasta_puja->ultima_puja_proveedor($id, $data[$i]['proveedor_id']);

            $data[$i]['alias'] = $prov['alias'];

            $data[$i]['puja'] = $puja['monto'];

            $data[$i]['n'] = $i+1;

        }

        $data = json_encode($data);



        echo $data;



    }

*/





}



