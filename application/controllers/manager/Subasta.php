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
        $helper = array('url', 'mantenimiento', 'fecha', 'generador');
        $model = array('m_usuario', 'm_subasta', 'm_departamento', 'm_provincia', 'm_distrito', 'm_criterio', 'm_tipo_descuento', 'm_tipo_subasta', 'm_proveedor', 'm_cliente', 'm_producto', 'm_subasta_proveedor','m_subasta_criterio', 'm_categoria', 'm_moneda', 'm_proveedor_criterio', 'm_subasta_proveedor_puntaje', 'm_subasta_proveedor_criterio', 'm_subasta_historial_puja');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->items['base_url'] = base_url();
        $this->items['panel_url'] = base_url() . "manager/";
        $this->items['get_url'] = base_url() . "manager/subasta/";
        $this->items['active'] = "subasta";
        $this->items['modulo'] = "subasta";

        /*
         * Datos de la sesion
         */
        $this->session_comp->verificar_logueo('u_manager', 'manager');
        $this->_session = $this->session_comp->datos_usuario('u_manager');      
        $this->items['manager'] = $this->m_usuario->mostrar('id', $this->_session->sys_id);
        $this->items['session'] = array(
            'id' => $this->_session->sys_id,
            'usuario' => $this->_session->sys_usuario,
            'nivel' => $this->_session->sys_nivel,
            'nombre' => $this->items['manager']['nombre']
            );
        $this->items['menu'] = $this->smarty_tpl->view('manager/menu', $this->items, true);
    }

    public function listar(){
        $data['titulo_pagina'] = 'Listar subasta';
        $data['pagina'] = 'Listar subasta';
        /* ------------------------------------------------------------ */
        $data['agregar'] = TRUE;
        $data['subasta'] = FALSE;
        $data['buttons'] = '<span data-toggle="tooltip" title="" data-original-title="Ingresar a subasta"><a class="btn btn-blue1" data-toggle="modal" title="Ingresar a Subasta" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Ingresar a subasta</i></a></span>';
        $categoria = $this->input->post('categoria');
        $where = array();

        if($categoria != ""){
            $where['categoria_id'] = $categoria;
        }
        $data['filtro'] = $where;
        $data['lista'] = $this->m_subasta->mostrar_cuando($where);
        $data['f_actual'] = date("Y-m-d H:i:s");
        $data['categorias'] = $this->m_categoria->mostrar_activos();
        $data['tabla'] = $this->smarty_tpl->view('manager/subasta_tabla', $data, true);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_lista', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }



    public function agregar(){
        $data['titulo_pagina'] = 'Agregar subasta';
        $data['pagina'] = 'Agregar subasta';
        /* ------------------------------------------------------------ */
        $data['tipo_descuentos'] = $this->m_tipo_descuento->mostrar_activos();
        $data['criterios'] = $this->m_criterio->mostrar_activos();
        $data['proveedores'] = $this->m_proveedor->mostrar_activos();
        $data['clientes'] = $this->m_cliente->mostrar_activos();
        $data['monedas'] = $this->m_moneda->mostrar_activos();
        $data['categorias'] = $this->m_categoria->mostrar_activos();
        $data['s_proveedores'] = array();
        $data['s_criterios'] = array();
        $data['total'] = 0;
        $data['form'] = $this->smarty_tpl->view('manager/subasta_form_bases', $data, true);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function editar($id = ""){
        $data['titulo_pagina'] = 'Editar subasta';
        $data['pagina'] = 'Editar subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));
        if($data['registro']['precio_base'] != ""){
            $data['registro']['ahorro_monto'] = $data['registro']['precio_base'] - $data['registro']['precio_reserva'];
            $data['registro']['ahorro_porcentaje'] = $data['registro']['ahorro_monto'] * 100 / $data['registro']['precio_base'];
        }else{
            $data['registro']['ahorro_monto'] = 0;
            $data['registro']['ahorro_porcentaje'] = 0;
        }

        $data['tipo_subastas'] = $this->m_tipo_subasta->mostrar_activos();
        $data['tipo_descuentos'] = $this->m_tipo_descuento->mostrar_activos();
        $data['criterios'] = $this->m_criterio->mostrar_activos();
        $data['proveedores'] = $this->m_proveedor->mostrar_activos();
        $data['clientes'] = $this->m_cliente->mostrar_activos();
        $data['monedas'] = $this->m_moneda->mostrar_activos();
        $data['categorias'] = $this->m_categoria->mostrar_activos();
        
        if($data['registro']['categoria_id'] != ""){
            $data['productos'] = $this->m_producto->mostrar_cuando(array("categoria_id" => $data['registro']['categoria_id'], "t.oculto" => 0));
        }
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
        $data['form'] = $this->smarty_tpl->view('manager/subasta_form_1', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }

    public function editar_bases($id = ""){
        $data['titulo_pagina'] = 'Editar bases de subasta';
        $data['pagina'] = 'Editar bases de subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));
        
        $data['proveedores'] = $this->m_proveedor->mostrar_activos();
        $data['clientes'] = $this->m_cliente->mostrar_activos();
        $data['s_proveedores'] = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $data['form'] = $this->smarty_tpl->view('manager/subasta_form_bases', $data, true);
        /* ------------------------------------------------------------ */
        $this->smarty_tpl->view('plantilla/header', $data);
        $this->smarty_tpl->view('plantilla/p_formulario', $data);
        $this->smarty_tpl->view('plantilla/footer', $data);
    }


    public function resultado($id = ""){
        $data['titulo_pagina'] = 'Resultado subasta';
        $data['pagina'] = 'Resultado subasta';
        $data = array_merge($data, $this->items);
        $this->load->model('m_subasta_puja');
        /* ------------------------------------------------------------ */

        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));
        $data['registro']['hora_cierre'] = date('Y-m-d H:i:s', strtotime ('+' . $data['registro']['duracion'] . ' minute', strtotime($data['registro']['f_inicio'])));

        $data['id'] = $id;

        $ganador = $this->m_subasta_proveedor_puntaje->mostrar(array("t.subasta_id" => $id, "t.puesto" => 1));
        $ultima_puja = $this->m_subasta_puja->ultima_puja($id);
        $proveedor = $this->m_subasta_proveedor->mostrar(array("t.subasta_id" => $id, "t.proveedor_id" => $ganador['proveedor_id']));
        $horas = $this->m_subasta_historial_puja->horas(array('subasta_id' => $id));
        
        $data['registro']['ultima_puja'] = $ultima_puja['monto'];

        $data['registro']['ganador'] = $ganador;

        $data['registro']['n_pujas'] = count($horas);

        $data['registro']['ganador']['alias'] = $proveedor['alias'];

        if(count($horas) == 0){

        }else{
        	$data['registro']['ahorro_monto'] = $data['registro']['precio_base'] - $data['registro']['precio_reserva'];

        	$data['registro']['ahorro_porcentaje'] = $data['registro']['ahorro_monto'] * 100 / $data['registro']['precio_base'];
        	
        	$data['registro']['ganador']['hora_oferta'] = $horas[$data['registro']['n_pujas'] - 1]['hora'];
        }

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



        $data['detalle'] = $this->smarty_tpl->view('manager/subasta_detalle', $data, true);

        /* ------------------------------------------------------------ */

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/p_observar', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }


    public function accion(){

        $form_bases = $this->input->post('form_bases');

        $id = $this->input->post('id');

        //$codigo = $this->input->post('codigo');

        $f_inicio = $this->input->post('f_inicio');

        $cliente = $this->input->post('cliente');

        $duracion = $this->input->post('duracion');

        $extencion = $this->input->post('extencion');

        $categoria = $this->input->post('categoria');

        $descripcion = $this->input->post('descripcion');

        $moneda = $this->input->post('moneda');

        $producto = $this->input->post('producto');

        $precio_base = $this->input->post('precio_base');

        $precio_reserva = $this->input->post('precio_reserva');

        $tipo_descuento = $this->input->post('tipo_descuento');

        $tipo_subasta = $this->input->post('tipo_subasta');

        $descuento_minimo = $this->input->post('descuento_minimo');

        $a_proveedor = $this->input->post('a_proveedor[]');

        $a_alias = $this->input->post('a_alias[]');

        $a_c_criterio = $this->input->post('a_c_criterio[]');

        $a_c_valor = $this->input->post('a_c_valor[]');

        $total = $this->input->post('total');

        $bases = $this->archivo->documento('bases', 'single');

        $scp_id = $this->input->post('scp_id');

        $scp_puntaje = $this->input->post('scp_puntaje');

        //VALIDACION DE CAMPOS



        $error = '';



        if($id == "") {

            //$error .= $this->mantenimiento->validacion($codigo, 'required|maxlenght[50]', 'Código');

        }
        $error .= $this->mantenimiento->validacion($cliente, 'required', 'Cliente');
        if($form_bases == ""){
        	$error .= $this->mantenimiento->validacion($f_inicio, 'required', 'Fecha');
            $error .= $this->mantenimiento->validacion($duracion, 'required', 'Duración (min)');
            $error .= $this->mantenimiento->validacion($extencion, 'required', 'Extención (min)');
            $error .= $this->mantenimiento->validacion($categoria, 'required', 'Categoría');
            $error .= $this->mantenimiento->validacion($producto, 'required', 'Producto / Servicio');
            $error .= $this->mantenimiento->validacion($descripcion, 'required', 'Descripcion');
            $error .= $this->mantenimiento->validacion($moneda, 'required', 'Moneda');
            $error .= $this->mantenimiento->validacion($precio_base, 'required|numeric|maxlenght[250]', 'Precio Base');
            $error .= $this->mantenimiento->validacion($precio_reserva, 'required|numeric|maxlenght[250]', 'Precio de Reserva');
            $error .= $this->mantenimiento->validacion($tipo_descuento, 'required', 'Tipo de descuento');
            $error .= $this->mantenimiento->validacion($descuento_minimo, 'required|numeric|maxlenght[250]', 'Descuento minimo');
            $error .= $this->mantenimiento->validacion($tipo_subasta, 'required', 'Tipo de subasta');
        }
        if($id == ""){
            $error .= $this->mantenimiento->validacion($a_proveedor, 'required', 'Proveedor');
            $error .= $this->mantenimiento->validacion($a_alias, 'required', 'Alias');
            if($form_bases == ""){
                $error .= $this->mantenimiento->validacion($a_c_criterio, 'required', 'Criterio');
                $error .= $this->mantenimiento->validacion($a_c_valor, 'required', 'Valor');
            }
        }

        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }


        if($form_bases == ""){
            if($total < 100){
                echo $this->alerta->mensaje_error('<li style="margin-left: 12px;">El valor total de los criterios debe ser igual a <b>100%</b></li>', TRUE);
                EXIT;
            }
        }

        //GENERAR CODIGO P0010318
        if($id == "") {
         
            $cantidad_subastas = $this->m_subasta->cantidad_subastas_mes();
            
            $cantidad_subastas +=1;
            $cantidad_subastas = str_pad($cantidad_subastas, 3, "0", STR_PAD_LEFT);
        
            $codigo = 'P' . $cantidad_subastas . date('my');
            
            
            //VALIDAR QUE EL CODIGO DE SUBASTA NO EXISTA

            $existe = $this->m_subasta->existe_campo('codigo', $codigo, $id);
    
            if($existe){
    
                echo $this->alerta->mensaje_error('<li style="margin-left: 12px;">El codigo <b>"' . $codigo . '"</b> ya existe</li>', TRUE);
    
                EXIT;
    
            }   
        }
        
        if ($bases !== FALSE) {
            $newdoc = $this->archivo->guardar_archivo($bases, 'public/documento/subasta');
            $info['bases'] = $newdoc;
        }

        if($id == ""){
            $info['codigo'] = $codigo;
        }

        if($form_bases == ""){

            $mon = $this->m_moneda->mostrar('t.id', $moneda);
            $info['duracion'] = $duracion;
            $info['extencion'] = $extencion;
            $info['descripcion'] = $descripcion;
            $info['producto_id'] = $producto;
            $info['moneda_id'] = $moneda;
            $info['tipo_cambio'] = $mon['tipo_cambio'];
            $info['precio_base'] = $precio_base;
            $info['precio_reserva'] = $precio_reserva;
            $info['descuento_minimo'] = $descuento_minimo;
            $info['tipo_descuento_id'] = $tipo_descuento;
            $info['tipo_subasta_id'] = $tipo_subasta;
            $info['f_disenio'] = date("Y-m-d H:i:s");
            $info['f_inicio'] = $f_inicio;
        }else{
            $info['f_bases'] = date("Y-m-d H:i:s");
            $info['duracion'] = 20;
            $info['extencion'] = 3;
        }

        
        $info['cliente_id'] = $cliente;
        $info['estado_id'] = 1;
        
        if ($id == '') { // Agregar

            if($form_bases == ""){
                $info['precio_final'] = $precio_base;
            }
            $info['f_registro'] = date("Y-m-d H:i:s");
            $resultSet = $this->m_subasta->insertar($info);
            $id = $resultSet;
            $nuevo = TRUE;
        }else{
            $resultSet = $this->m_subasta->actualizar($info, $id);
            $nuevo = FALSE;
        }

        
        if($resultSet !== FALSE){

            //ACTUALIZAR PUNTAJE DE PROVEEDOR SEGUN CRITERIO
            for ($i=0; $i < count($scp_id); $i++) {

                $spc_info['puntaje'] = $scp_puntaje[$i];

                $this->m_subasta_proveedor_criterio->actualizar($spc_info, $scp_id[$i]);

            }
            //AGREGAR PROVEEDOR
            if(!$nuevo){ //EDICION
                $criterios = $this->m_subasta_criterio->mostrar_cuando(array("subasta_id" => $id));
                
                $nspc['puntaje'] = 0;

                $nspc['subasta_id'] = $id;

            }

            $p_info['subasta_id'] = $id;

            for ($i=0; $i < count($a_proveedor); $i++) { 
            	$reg_prov_sub = $this->m_subasta_proveedor->mostrar(array("subasta_id" => $id, "proveedor_id" => $a_proveedor[$i]));
            	if(count($reg_prov_sub) == 0){
            		$p_info['alias'] = $a_alias[$i];
	                $p_info['proveedor_id'] = $a_proveedor[$i];
	                $this->m_subasta_proveedor->insertar($p_info);
	                if(!$nuevo){
	                    $nspc['proveedor_id'] = $a_proveedor[$i];
	                    foreach ($criterios as $c) {
	                        $nspc['criterio_id'] = $c['criterio_id'];
	                        $this->m_subasta_proveedor_criterio->insertar($nspc);
	                    }
	                }
            	}
            }



            $c_info['subasta_id'] = $id;





            $p_puntaje = array();





            for ($i=0; $i < count($a_c_criterio); $i++) { 

                $reg_crit_sub = $this->m_subasta_criterio->mostrar(array("subasta_id" => $id, "criterio_id" => $a_c_criterio[$i]));
                if(count($reg_crit_sub) == 0){

                    $c_info['criterio_id'] = $a_c_criterio[$i];
                    $c_info['valor'] = $a_c_valor[$i];
                    $this->m_subasta_criterio->insertar($c_info);
                    //PROVEEDOR CRITERIO
                    if($nuevo){ //NUEVO
                        $spc_info['subasta_id'] = $id;
                        $spc_info['criterio_id'] = $a_c_criterio[$i];
                        for ($j=0; $j < count($a_proveedor); $j++) { 
                            $spc_info['proveedor_id'] = $a_proveedor[$j];
                            $this->m_subasta_proveedor_criterio->insertar($spc_info);
                        }
                    }else{
                        $spc_info['subasta_id'] = $id;
                        $spc_info['criterio_id'] = $a_c_criterio[$i];
                        $provs = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));
                        foreach ($provs as $p) {
                            $spc_info['proveedor_id'] = $p['proveedor_id'];
                            $this->m_subasta_proveedor_criterio->insertar($spc_info);
                        }
                    }
                }
            }

            /*

            $punt_info['subasta_id'] = $id;

            $punt_info['puesto'] = "-";

            for ($i=0; $i < count($p_puntaje); $i++) { 

                $punt_info['proveedor_id'] = $p_puntaje[$i]['id'];

                $punt_info['p_criterios'] = $p_puntaje[$i]['puntaje'];

                $punt_info['puntaje'] = $p_puntaje[$i]['puntaje'];

                $this->m_subasta_proveedor_puntaje->insertar($punt_info);

            }

            */



            //PUNTAJE TOTAL DE PROVEEDORES

            $proveedores = $this->m_subasta_proveedor->mostrar_cuando(array("t.subasta_id" => $id));

            $spp_info['subasta_id'] = $id;

            foreach ($proveedores as $p) {

                $punt = $this->m_subasta_proveedor_criterio->puntaje($id, $p['proveedor_id']);

                $puntaje = $this->m_subasta_proveedor_puntaje->mostrar(array("t.subasta_id" => $id, "t.proveedor_id" => $p['proveedor_id']));

                $spp_info['proveedor_id'] = $p['proveedor_id'];

                $spp_info['p_criterios'] = $punt['puntaje'] != "" ? $punt['puntaje'] : 0;

                $spp_info['puesto'] = '-';

                if(count($puntaje) > 0){

                    $this->m_subasta_proveedor_puntaje->actualizar($spp_info, $puntaje['id']);

                }else{

                    $this->m_subasta_proveedor_puntaje->insertar($spp_info);

                }

            }



            echo $this->alerta->mensaje_exito('Registro exitoso');



            if($nuevo){

                echo $this->url_comp->direccionar($this->items['get_url'] . 'editar/' . $id, TRUE);

            }else{

                echo $this->url_comp->actualizar_tiempo(1000);

            }



        }else{



            echo $this->alerta->mensaje_error('Ah ocurrio un error');



        }



    }







    public function accion_eliminar($id = '') {



        if ($id == '') {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        }



        $where = array('t.id' => $id, 't.oculto' => 1, 't.f_inicio >' => date("Y-m-d H:i:s"));



        if (count($this->m_subasta->mostrar($where)) == 0) {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        } else {



            $this->m_subasta_criterio->eliminar(array('subasta_id'=> $id));



            $this->m_subasta_proveedor->eliminar(array('subasta_id'=> $id));



            $this->m_subasta->eliminar($id);



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



        }



    }







    public function accion_denegar($id = '') {



        if ($id == '') {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        }



        $where = array('t.id' => $id, 't.oculto' => 0);



        if (count($this->m_subasta->mostrar($where)) == 0) {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        } else {



            $this->m_subasta->ocultar($id);



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



        }



    }







    public function accion_permitir($id = '') {



        if ($id == '') {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        }



        $where = array('t.id' => $id, 't.oculto' => 1);



        if (count($this->m_subasta->mostrar($where)) == 0) {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        } else {



            $this->m_subasta->permitir($id);



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



        }



    }







    public function eliminar_proveedor($id = '') {



        $id = $this->input->post('id');



        if ($id == '') {



            //echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        }

        $proveedor = $this->m_subasta_proveedor->mostrar('t.id', $id);

        $this->m_subasta_proveedor->eliminar($id);

        $this->m_subasta_proveedor_criterio->eliminar(array("subasta_id" => $proveedor['subasta_id'], "proveedor_id" => $proveedor['proveedor_id']));

        echo $this->url_comp->actualizar();



    }



    public function eliminar_criterio($id = '') {



        $id = $this->input->post('id');



        if ($id == '') {



            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);



            EXIT;



        }

        $criterio = $this->m_subasta_criterio->mostrar('t.id', $id);

        $this->m_subasta_criterio->eliminar($id);

        $this->m_subasta_proveedor_criterio->eliminar(array("subasta_id" => $criterio['subasta_id'], "criterio_id" => $criterio['criterio_id']));



        echo $this->url_comp->actualizar();



    }







    //PROCESO DE SUBASTA

    public function code(){

        $codigo = $this->input->post('codigo');

        $subasta = $this->m_subasta->mostrar(array("t.codigo" => $codigo));

        echo $this->url_comp->direccionar($this->items['get_url'] . 'codigo/' . $subasta['id'], TRUE);

    }

    public function codigo($id = ""){

        $data['titulo_pagina'] = 'Subasta';



        $data['pagina'] = 'Subasta';



        $data['base_url'] = base_url();



        /* ------------------------------------------------------------ */



        $user = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);
        $data['id'] = $id;
        $data['prov'] = $this->m_subasta_proveedor->mostrar(array("t.proveedor_id" => $user['id']));
        $data['subasta'] = $this->m_subasta->mostrar('t.id', $id);
        $proveedores = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id));
        $data['parcicipantes'] = count($proveedores);
        //$data['subasta'] = $this->smarty_tpl->view('manager/prueba_angular', $data, true);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('manager/subasta_ejecucion', $data);
    }

    public function terminar($id = ""){
        if ($id == '') {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        }



        $where = array('t.id' => $id, 't.oculto' => 0);
        if (count($this->m_subasta->mostrar($where)) == 0) {
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
            EXIT;
        } else {
            $this->m_subasta->actualizar(array('estado_id' => 4), $id);
            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);
        }

    }

}



