<?php
error_reporting(0);
class Session_comp {

    public function __construct() {

        $this->ci = & get_instance();
        session_start();
        /*

         * Configuración para librerias, helpers y modelos

         */

        $library = array('alerta', 'fecha', 'url_comp');
        //
        $helper = array();
        //
        $model = array('m_usuario');
        //
        $this->ci->load->library($library);
        //
        $this->ci->load->helper($helper);
        //
        $this->ci->load->model($model);

        /*

         * Configuración personalizada

         */
        $this->_session = $this->datos_usuario('user_data');

    }


    public function verificar_logueo($array = '', $url = '') {

        $session = $this->datos_usuario($array);

        if (isset($session->sys_id) !== TRUE) {

            echo $this->ci->alerta->location_href(base_url() . $url);

        }

    }

    public function login($array = '', $url = '') {

        $session = $this->datos_usuario($array);

        if (isset($session->sys_id) === TRUE) {

            echo $this->ci->alerta->location_href(base_url() . $url);

        }

    }

    public function datos_usuario($array = '') {

        // $session = $this->ci->session->all_userdata();
        $session = $_SESSION['user_session'];
        if (isset($session[$array]) && is_array($session[$array])) {

            $data = new stdClass();

            foreach ($session[$array] as $key => $value) {

                $data->$key = $value;

            }

            return $data;

        } else {

            return false;

        }

    }
    /*
    public function datos($array = '') {

        $session = $this->ci->session->all_userdata();

        if (isset($session[$array]) && is_array($session[$array])) {
            $data = array();
            switch ($session[$array]['sys_nivel']) {
                case '1'://SA
                    break;
                case '3'://Institucion
                    $institucion = $this->ci->m_proveedor->mostrar('t.usuario_id', $session[$array]['sys_id']);
                    $data = array(
                        'sys_nombre' => $institucion['nombre'],
                        'sys_panel' => 'Institución'
                        );
                    break;
                default:
                    break;
            }
            $data = array_merge($session[$array], $data);
            return $data;

        } else {

            return FALSE;

        }

    }
    */


    public function destruir_session($array = '') {

        // $session = $this->ci->session->all_userdata();
        $session = $_SESSION['user_session'];
        if (isset($session[$array]) && is_array($session[$array])) {

            // $this->ci->session->unset_userdata($array);
            session_destroy();
            return TRUE;

        } else {

            return FALSE;

        }

    }



}
