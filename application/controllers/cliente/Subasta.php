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

        $library = array('smarty_tpl', 'session_comp', 'parser', 'mantenimiento', 'archivo', 'mydompdf');

        $helper = array('url', 'mantenimiento', 'fecha');

        $model = array('m_usuario', 'm_subasta', 'm_departamento', 'm_provincia', 'm_distrito', 'm_criterio', 'm_tipo_descuento', 'm_cliente', 'm_cliente', 'm_producto','m_subasta_criterio', 'm_proveedor', 'm_moneda', 'm_categoria', 'm_subasta_proveedor', 'm_proveedor_criterio', 'm_subasta_proveedor_puntaje', 'm_subasta_historial_puja');

        $this->load->library($library);

        $this->load->helper($helper);

        $this->load->model($model);

        /*

         * Configuración personalizada

         */

        $this->items['base_url'] = base_url();

        $this->items['panel_url'] = base_url() . "cliente/";

        $this->items['get_url'] = base_url() . "cliente/subasta/";

        $this->items['active'] = "subasta";

        $this->items['modulo'] = "subasta";



        /*

         * Datos de la sesion

         */

        $this->session_comp->verificar_logueo('u_cliente', 'cliente');

        // $this->_session = $this->session_comp->datos_usuario('u_cliente');

        $this->_session = $_SESSION['user_session'];
        // print_r($this->_session);
        // exit;
        $this->items['cliente'] = $this->m_usuario->mostrar('id', $this->_session['u_cliente']['sys_id']);

        $this->items['session'] = array(

            'id' => $this->_session['u_cliente']['sys_id'],

            'usuario' => $this->_session['u_cliente']['sys_usuario'],

            'nivel' => $this->_session['u_cliente']['sys_nivel'],

            'nombre' => $this->items['cliente']['nombre']

            );

        $this->items['menu'] = $this->smarty_tpl->view('cliente/menu', $this->items, true);
        $this->items['menu2'] = $this->smarty_tpl->view('cliente/menu_top', $this->items, true);

    }



    public function listar(){
        // echo 'subasta';
        $data['titulo_pagina'] = 'Listar subasta';
        $data['pagina'] = 'Listar subasta';
        /* ------------------------------------------------------------ */
        $data['agregar'] = FALSE;
        $data['buttons'] = '<span data-toggle="tooltip" title="" data-original-title="Ingresar a subasta"><a class="btn btn-blue1" data-toggle="modal" title="Ingresar a Subasta" data-target="#exampleModal"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar a subasta</a></span>';
        $cliente = $this->m_cliente->mostrar('t.usuario_id', $this->_session['u_cliente']['sys_id']);

        $data['lista'] = $this->m_subasta->mostrar_cuando(array("cliente_id" => $cliente['id']));
        $data['tabla'] = $this->smarty_tpl->view('cliente/subasta_tabla', $data, true);

        /* ------------------------------------------------------------ */

        $data = array_merge($data, $this->items);

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/p_lista', $data);

        $this->smarty_tpl->view('plantilla/footer', $data);

    }



    public function observar($id = ""){

        $data['titulo_pagina'] = 'Observar subasta';

        $data['pagina'] = 'Observar subasta';

        $data = array_merge($data, $this->items);

        /* ------------------------------------------------------------ */

        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));

        $data['tipo_descuentos'] = $this->m_tipo_descuento->mostrar_activos();

        $data['criterios'] = $this->m_criterio->mostrar_activos();

        $data['proveedores'] = $this->m_proveedor->mostrar_activos();

        $data['clientes'] = $this->m_cliente->mostrar_activos();

        $data['monedas'] = $this->m_moneda->mostrar_activos();

        $data['categorias'] = $this->m_categoria->mostrar_activos();

        $data['productos'] = $this->m_producto->mostrar_cuando(array("categoria_id" => $data['registro']['categoria_id'], "t.oculto" => 0));

        $data['s_criterios'] = $this->m_subasta_criterio->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $data['s_proveedores'] = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $i = 0;

        $j = 0;

        foreach ($data['s_criterios'] as $c) {

            foreach ($data['s_proveedores'] as $p) {

                $criterio = array();

                $criterio = $this->m_proveedor_criterio->mostrar(array('t.id' => $p['proveedor_id'], 'criterio_id' => $c['criterio_id'], 't.oculto' => 0));

                $data['s_proveedores'][$j]['criterios'][$i] = $criterio;

                $j++;

            }

            $j = 0;

            $i++;

        }



        $data['total'] = 0;

        foreach ($data['s_criterios'] as $c) {

            $data['total'] += $c['valor'];

        }

        $data['detalle'] = $this->smarty_tpl->view('cliente/subasta_detalle', $data, true);

        /* ------------------------------------------------------------ */

        $this->smarty_tpl->view('plantilla/header', $data);

        $this->smarty_tpl->view('plantilla/p_observar', $data);

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

        $data['registro']['ahorro_monto'] = $data['registro']['precio_base'] - $data['registro']['precio_reserva'];

        $data['registro']['ahorro_porcentaje'] = $data['registro']['ahorro_monto'] * 100 / $data['registro']['precio_base'];

        $data['id'] = $id;

        $ganador = $this->m_subasta_proveedor_puntaje->mostrar(array("t.subasta_id" => $id, "t.puesto" => 1));        $ultima_puja = $this->m_subasta_puja->ultima_puja($id);
        $proveedor = $this->m_subasta_proveedor->mostrar(array("t.subasta_id" => $id, "t.proveedor_id" => $ganador['proveedor_id']));
        $horas = $this->m_subasta_historial_puja->horas(array('subasta_id' => $id));


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



    public function code(){

        $codigo = $this->input->post('codigo');

        $cliente = $this->m_cliente->mostrar('t.usuario_id', $this->_session->sys_id);

        $subasta = $this->m_subasta->mostrar(array("t.codigo" => $codigo, "t.cliente_id" =>$cliente['id']));

        if(count($subasta) > 0){

            echo $this->url_comp->direccionar($this->items['get_url'] . 'codigo/' . $subasta['id'], TRUE);

        }else{

            echo $this->alerta->mensaje_error('El código ingresado no es válido');

        }

    }

    public function codigo($id = ""){

        $data['titulo_pagina'] = 'Listar proveedor';



        $data['pagina'] = 'Listar proveedor';



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

        $this->smarty_tpl->view('cliente/subasta_ejecucion', $data);

    }



    public function pregunta($id = ""){
        $data['titulo_pagina'] = 'Preguntas de la subasta';
        $data['pagina'] = 'Preguntas de la subasta';
        $data = array_merge($data, $this->items);
        /* ------------------------------------------------------------ */
        $this->load->model('m_subasta_pregunta');
        $data['id'] = $id;
        $data['preguntas'] = $this->m_subasta_pregunta->mostrar_cuando(array("subasta_id" => $id, "usuario_id" => $this->_session['u_cliente']['sys_id']));
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
            echo $this->alerta->mensaje_exito('Registro exitoso');
            echo $this->url_comp->actualizar_tiempo(3000);
        }else{
            echo $this->alerta->mensaje_error('Ah ocurrio un error');
        }
    }



    public function detalle_pdf($id = ""){

        $data['registro'] = $this->m_subasta->mostrar(array("t.id" => $id));

        $data['tipo_descuentos'] = $this->m_tipo_descuento->mostrar_activos();

        $data['criterios'] = $this->m_criterio->mostrar_activos();

        $data['proveedores'] = $this->m_proveedor->mostrar_activos();

        $data['clientes'] = $this->m_cliente->mostrar_activos();

        $data['monedas'] = $this->m_moneda->mostrar_activos();

        $data['categorias'] = $this->m_categoria->mostrar_activos();

        $data['productos'] = $this->m_producto->mostrar_cuando(array("categoria_id" => $data['registro']['categoria_id'], "t.oculto" => 0));

        $data['s_criterios'] = $this->m_subasta_criterio->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $data['s_proveedores'] = $this->m_subasta_proveedor->mostrar_cuando(array("subasta_id" => $id, "t.oculto" => 0));

        $i = 0;

        $j = 0;

        foreach ($data['s_criterios'] as $c) {

            foreach ($data['s_proveedores'] as $p) {

                $criterio = array();

                $criterio = $this->m_proveedor_criterio->mostrar(array('t.id' => $p['proveedor_id'], 'criterio_id' => $c['criterio_id'], 't.oculto' => 0));

                $data['s_proveedores'][$j]['criterios'][$i] = $criterio;

                $j++;

            }

            $j = 0;

            $i++;

        }



        $data['total'] = 0;

        foreach ($data['s_criterios'] as $c) {

            $data['total'] += $c['valor'];

        }

        //FIN DATA

        $html = $this->smarty_tpl->view('cliente/subasta_detalle', $data, true);

        $this->mydompdf->load_html($html);

        $this->mydompdf->render();

        $this->mydompdf->set_base_path('./public/plugins/dompdf/dompdf.css'); //agregar de nuevo el css

        $this->mydompdf->stream("detalle_subasta.pdf", array("Attachment" => false));

    }



    public function accion(){

        $id = $this->input->post('id');

        $codigo = $this->input->post('codigo');

        $f_inicio = $this->input->post('f_inicio');

        $cliente = $this->input->post('cliente');

        $producto = $this->input->post('producto');

        $precio_base = $this->input->post('precio_base');

        $tipo_descuento = $this->input->post('tipo_descuento');

        $descuento_minimo = $this->input->post('descuento_minimo');

        $a_cliente = $this->input->post('a_cliente[]');

        $a_c_criterio = $this->input->post('a_c_criterio[]');

        $a_c_valor = $this->input->post('a_c_valor[]');

        $total = $this->input->post('total');



        //VALIDACION DE CAMPOS

        $error = '';

        if($id == "") {

            $error .= $this->mantenimiento->validacion($codigo, 'required|maxlenght[50]', 'Código');

        }

        $error .= $this->mantenimiento->validacion($f_inicio, 'required', 'Fecha');

        $error .= $this->mantenimiento->validacion($cliente, 'required', 'Cliente');

        $error .= $this->mantenimiento->validacion($producto, 'required', 'Producto / Servicio');

        $error .= $this->mantenimiento->validacion($precio_base, 'required|numeric|maxlenght[250]', 'Precio Base');

        $error .= $this->mantenimiento->validacion($tipo_descuento, 'required', 'Tipo de descuento');

        $error .= $this->mantenimiento->validacion($descuento_minimo, 'required|numeric|maxlenght[250]', 'Descuento minimo');

        if($id == ""){

            $error .= $this->mantenimiento->validacion($a_cliente, 'required', 'cliente');

            $error .= $this->mantenimiento->validacion($a_c_criterio, 'required', 'Criterio');

            $error .= $this->mantenimiento->validacion($a_c_valor, 'required', 'Valor');

        }

        if ($error != '') {

            echo $this->alerta->mensaje_error($error, TRUE);

            EXIT;

        }

        if($total < 100){

            echo $this->alerta->mensaje_error('<li style="margin-left: 12px;">El valor total de los criterios debe ser igual a <b>100%</b></li>', TRUE);

            EXIT;

        }



        //VALIDAR QUE EL CODIGO DE SUBASTA NO EXISTA

        $existe = $this->m_subasta->existe_campo('codigo', $codigo, $id);

        if($existe){

            echo $this->alerta->mensaje_error('<li style="margin-left: 12px;">El codigo <b>"' . $codigo . '"</b> ya existe</li>', TRUE);

            EXIT;

        }

        if($id == ""){

            $info['codigo'] = $codigo;

        }

        $info['duracion'] = 20;

        $info['f_inicio'] = $f_inicio;

        $info['cliente_id'] = $cliente;

        $info['producto_id'] = $producto;

        $info['precio_base'] = $precio_base;

        $info['tipo_descuento_id'] = $tipo_descuento;

        $info['descuento_minimo'] = $descuento_minimo;



        if ($id == '') { // Agregar

            $info['f_registro'] = date("Y-m-d H:i:s");

            $resultSet = $this->m_subasta->insertar($info);

            $id = $resultSet;

        }else{

            $resultSet = $this->m_subasta->actualizar($info, $id);

        }



        //RESPUESTA

        if($resultSet !== FALSE){



            $p_info['subasta_id'] = $id;

            for ($i=0; $i < count($a_cliente); $i++) {

                $p_info['cliente_id'] = $a_cliente[$i];

                $this->m_subasta_cliente->insertar($p_info);

            }



            $c_info['subasta_id'] = $id;

            for ($i=0; $i < count($a_c_criterio); $i++) {

                $c_info['criterio_id'] = $a_c_criterio[$i];

                $c_info['valor'] = $a_c_valor[$i];

                $this->m_subasta_criterio->insertar($c_info);

            }



            echo $this->alerta->mensaje_exito('Registro exitoso');

            echo $this->url_comp->direccionar($this->items['get_url'] . 'listar', TRUE);

        }else{

            echo $this->alerta->mensaje_error('Ah ocurrio un error');

        }

    }



}
