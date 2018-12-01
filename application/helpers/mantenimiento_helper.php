<?php

    function accion($id, $data, $url, $estado) {

        $items = explode('|', $data);

        $string = '';

        foreach ($items as $row) {
            switch (trim($row)) {
                //PONER EN FUNCION "SUBASTA"
                //INICIO PROVICIONAL
                case 'bases':

                    $string .= '<a href="' . $url . 'observar/' . $id . '" class="btn btn-primary" data-toggle="tooltip" title="Bases"><i class="fa fa-file-text-o"></i></a>';

                    break;

                case 'ver':

                    $string .= '<a href="' . $url . 'observar/' . $id . '" class="btn btn-warning" data-toggle="tooltip" title="Diseño de subasta"><i class="fa fa-search"></i></a>';

                    break;

                case 'resultado':

                    $string .= '<a href="#" class="btn btn-success" data-toggle="tooltip" title="Resultado"><i class="fa fa-check-square-o"></i></a>';

                    break;
                //FIN PROVICIONAL

                case 'editar_bases':



                    if ($estado == 0 || $estado == 3) {



                        $string .= '<a href="' . $url . 'editar_bases/' . $id . '" class="btn bot-sky1" data-toggle="tooltip" title="Editar bases"><i class="fa fa-edit"></i></a>';



                    }



                    break;

                case 'editar':



                    if ($estado == 0 || $estado == 3) {



                        $string .= '<a href="' . $url . 'editar/' . $id . '" class="btn btn-warning" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></a> ';



                    }



                    break;

                case 'editar_disenio':



                    if ($estado == 0 || $estado == 3) {



                        $string .= '<a href="' . $url . 'editar/' . $id . '" class="btn btn-warning" data-toggle="tooltip" title="Editar diseño de subasta"><i class="fa fa-edit"></i></a> ';



                    }



                    break;



                case 'denegar':



                    if ($estado == 0) {



                        $string .= '<a href="" style="background-color: #f16654 !important ; border-color: #f16654 !important" class="denegar btn btn-danger" data-toggle="tooltip" title="Bloquear" data-url="' . $url . 'accion_denegar/' . $id . '"><i class="fa fa-ban"></i></a> ';



                    }



                    break;



                case 'permitir':



                    if ($estado == 1) {



                        $string .= '<a href="' . $url . 'accion_permitir/' . $id . '" class="btn btn-info" data-toggle="tooltip" title="Desbloquear"><i class="fa fa-check"></i></a> ';



                    }



                    break;



                case 'eliminar':



                    if ($estado == 1 || $estado == 3) {



                        $string .= '<a href="" class="eliminar btn btn-danger" data-toggle="tooltip" title="Eliminar" data-url="' . $url . '/accion_eliminar/' . $id . '"><i class="fa fa-close"></i></a> ';



                    }



                    break;



                default:



                    break;



            }



        }
        return $string;
    }

    //SUBASTA
    function detalle($id, $data, $url){
        $items = explode('|', $data);
        $string = '';
        foreach ($items as $row) {
            switch (trim($row)) {
                case 'bases':
                    $ci = & get_instance();
                    $ci->load->model('m_subasta');
                    $subasta = $ci->m_subasta->mostrar('t.id', $id);
                    if($subasta['bases'] != ''){
                        $string .= '<a href="' . base_url() . 'public/documento/subasta/' . $subasta['bases'] . '" target="_blank" class="btn btn-primary" data-toggle="tooltip" title="Bases"><i class="fa fa-file-text-o"></i></a>';
                    }
                    break;

                case 'ver':
                    $string .= '<a href="' . $url . 'observar/' . $id . '" class="btn btn-warning" data-toggle="tooltip" title="Diseño de subasta"><i class="fa fa-search"></i></a>';
                    break;

                case 'resultado':
                    $string .= '<a href="' . $url . 'resultado/' . $id . '" class="btn btn-success" data-toggle="tooltip" title="Resultado"><i class="fa fa-line-chart"></i></a>';
                    break;
                
                default:
                    break;
            }
        }
        return $string;
    }




    function validacion($string, $config, $field) {

        $data = explode('|', $config);

        $message = '';

        foreach ($data as $items) {

            $value = trim($items);

            $new_value = '';

            if (strpos($value, 'minlenght') !== FALSE) {

                $pre_value = str_replace('minlenght', '', $value);

                $pre_value = str_replace('[', '', $pre_value);

                $pre_value = str_replace(']', '', $pre_value);

                $new_value = (int) $pre_value;

            }



            if (strpos($value, 'maxlenght') !== FALSE) {

                $pre_value = str_replace('maxlenght', '', $value);

                $pre_value = str_replace('[', '', $pre_value);

                $pre_value = str_replace(']', '', $pre_value);

                $new_value = (int) $pre_value;

            }



            if (strpos($value, 'size') !== FALSE) {

                $pre_value = str_replace('size', '', $value);

                $pre_value = str_replace('[', '', $pre_value);

                $pre_value = str_replace(']', '', $pre_value);

                $new_value = (int) $pre_value;

            }



            if (strpos($value, 'matched') !== FALSE) {

                $pre_value = str_replace('matched', '', $value);

                $pre_value = str_replace('[', '', $pre_value);

                $pre_value = str_replace(']', '', $pre_value);

                $data = explode('%', $pre_value);

                $data_field = (string) $data[0];

                $data_value = (string) $data[1];

            }



            if (($value == 'trim') && ($string != trim($string))) {

                $message .= '<li style="margin-left: 12px;">No se permiten espacios en los extremos: ' . $field . '</li>';

            } elseif (($value == 'required') && ($string == '')) {

                $message .= '<li style="margin-left: 12px;">Es necesario llenar este campo: ' . $field . '</li>';

            } elseif (($value == 'alpha') && ($string != '') && (!preg_match("/^([[:alpha:]])*$/", $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten unicamente carácteres alfabéticos: ' . $field . '</li>';

            } elseif (($value == 'alphanumeric') && ($string != '') && (!preg_match("/^([[:alnum:]])*$/", $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten unicamente carácteres alfanuméricos: ' . $field . '</li>';

            } elseif (($value == 'numeric') && ($string != '') && (!preg_match("/^([[:digit:]])*$/", $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten unicamente carácteres numéricos: ' . $field . '</li>';

            } elseif (($value == 'alphaspace') && ($string != '') && (!ctype_alpha(str_replace(' ', '', $string)))) {

                $message .= '<li style="margin-left: 12px;">Se permiten únicamente carácteres alfabéticos y espacios: ' . $field . '</li>';

            } elseif (($value == 'decimal') && ($string != '') && (!preg_match("/^[0-9]+(\.[0-9]+)?$/", $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten únicamente números enteros y decimales: ' . $field . '</li>';

            } elseif (($value == 'date') && ($string != '') && (!preg_match('/^(\d\d\-\d\d\-\d\d\d\d){1,1}$/', $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten únicamente fechas con formato dd-mm-yyyy: ' . $field . '</li>';

            } elseif (($value == 'alphaspecial') && ($string != '') && (!preg_match('/^[a-zñÑáéíóú\d_\s]+$/i', $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten únicamente carácteres alfabéticos especiales: ' . $field . '</li>';

            } elseif (($value == 'url') && ($string != '') && (!preg_match('/^[http:\/\/|www.|https:\/\/]/i', $string))) {

                $message .= '<li style="margin-left: 12px;">Se permiten únicamente direcciones url: ' . $field . '</li>';

            } elseif ((strpos($value, 'minlenght') !== FALSE) && ($string != '') && (strlen($string) < $new_value)) {

                $message .= '<li style="margin-left: 12px;">El texto ingresado es menor a ' . $new_value . ' carácteres: ' . $field . '</li>';

            } elseif ((strpos($value, 'maxlenght') !== FALSE) && ($string != '') && (strlen($string) > $new_value)) {

                $message .= '<li style="margin-left: 12px;">El texto ingresado es mayor a ' . $new_value . ' carácteres: ' . $field . '</li>';

            } elseif (($value == 'email') && ($string != '') && (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,4}$/', $string))) {

                $message .= '<li>Se permiten únicamente direcciones de correo: ' . $field;

            } elseif ((strpos($value, 'size') !== FALSE) && ($string != '') && (strlen($string) != $new_value)) {

                $message .= '<li style="margin-left: 12px;">El texto ingresado debe tener ' . $new_value . ' carácteres: ' . $field;

            } elseif ((strpos($value, 'matched') !== FALSE) && ($string != '' || $data_value != '') && ($string != $data_value)) {

                /*

                $message .= '<li style="margin-left: 12px;">El campo '

                        . '<span class="label text-white bg-red text-uppercase">' . $field . '</span> no se relaciona con el campo '

                        . '<span class="label text-white bg-red text-uppercase">' . $data_field . '</span>.</li>';

                */

                $message .= '<li style="margin-left: 12px;">El campo ' . $field . ' no se relaciona con el campo ' . $data_field . '</li>';

            }

        }

        if ($message != '') {

            return $message;

        } else {

            return '';

        }

    }



?>