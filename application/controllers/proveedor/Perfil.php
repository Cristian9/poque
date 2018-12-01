    <?php



@session_cache_limiter('private, must-revalidate');

@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

@header("Cache-Control: no-store, no-cache, must-revalidate");

@header("Cache-Control: post-check=0, pre-check=0", FALSE);

@header("Pragma: no-cache");



class Perfil extends CI_Controller {



    private $items = array();



    public function __construct() {

        parent::__construct();

        /*

         * Configuración para modelos

         */

        $library = array('mantenimiento', 'alerta', 'url_comp', 'session_comp', 'archivo');

        $helper = array('url');

        $model = array('m_proveedor');

        $this->load->model($model);

        $this->load->library($library);

        $this->load->helper($helper);



        /*

         * Datos de la sesion

         */

        $this->session_comp->verificar_logueo('u_proveedor', 'proveedor');

        $this->_session = $this->session_comp->datos_usuario('u_proveedor');      

    }



    public function editar(){

        $ruc = $this->input->post('ruc');

        $nombre = $this->input->post('nombre');

        $email = $this->input->post('email');

        $contacto = $this->input->post('contacto');

        $telefono = $this->input->post('telefono');

        $anexo = $this->input->post('anexo');

        $celular = $this->input->post('celular');

        $direccion = $this->input->post('direccion');

        $rubro = $this->input->post('rubro');

        $distrito = $this->input->post('distrito');

        $a_p_categoria = $this->input->post('a_p_categoria[]');

        $a_p_producto = $this->input->post('a_p_producto[]');

        $logo = $this->archivo->archivo_1('logo', 'single');

        

        //VALIDACION DE CAMPOS

        $error = '';

        $error .= $this->mantenimiento->validacion($ruc, 'required|maxlenght[20]', 'RUC');

        $error .= $this->mantenimiento->validacion($nombre, 'required|maxlenght[255]', 'Nombre');

        $error .= $this->mantenimiento->validacion($email, 'required|maxlenght[255]', 'Email');

        $error .= $this->mantenimiento->validacion($contacto, 'required|maxlenght[255]', 'Contacto');

        $error .= $this->mantenimiento->validacion($telefono, 'required|maxlenght[20]', 'Teléfono');

        $error .= $this->mantenimiento->validacion($anexo, 'maxlenght[10]', 'Anexos');

        $error .= $this->mantenimiento->validacion($celular, 'required|maxlenght[20]', 'Celular');

        $error .= $this->mantenimiento->validacion($rubro, 'required', 'Rubro');

        $error .= $this->mantenimiento->validacion($direccion, 'required|maxlenght[255]', 'Direccion');

        $error .= $this->mantenimiento->validacion($distrito, 'required', 'Distrito');



        if ($error != '') {

            echo $this->alerta->mensaje_error($error, TRUE);

            EXIT;

        }



        $info['n_documento'] = $ruc;

        $info['tipo_documento_id'] = 1;

        $info['nombre'] = $nombre;

        $info['email'] = $email;

        $info['contacto'] = $contacto;

        $info['telefono'] = $telefono;

        $info['anexo'] = $anexo;

        $info['celular'] = $celular;

        $info['direccion'] = $direccion;

        $info['rubro_id'] = $rubro;

        $info['distrito_id'] = $distrito;

        if ($logo !== FALSE) {

            $marca = array('marca' => '', 'tipo' => 'string');

            $info['logo'] = $this->archivo->guardar_imagen($logo, 'public/imagen/cliente', $marca, 1024);

        }



        $proveedor = $this->m_proveedor->mostrar('t.usuario_id', $this->_session->sys_id);

        if ($logo !== FALSE) {

            $this->archivo->eliminar_imagen($proveedor['logo'], 'public/imagen/proveedor');

        }

        $resultSet = $this->m_proveedor->actualizar($info, $proveedor['id']);

        

        //RESPUESTA

        if($resultSet !== FALSE){

            $p_info['proveedor_id'] = $proveedor['id'];

            for ($i=0; $i < count($a_p_producto); $i++) { 

                $p_info['producto_id'] = $a_p_producto[$i];

                $this->m_proveedor_producto->insertar($p_info);

            }



            echo $this->alerta->mensaje_exito('Registro exitoso');

            echo $this->url_comp->direccionar(base_url() . 'proveedor/home', TRUE);

        }else{

            echo $this->alerta->mensaje_error('Ah ocurrio un error');

        }

    }



}

