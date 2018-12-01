<?php
//ELIMINAR - PASAR AL HELPER
class Mantenimiento {

    public function accion($id, $data, $controlador, $estado) {
        $items = explode('|', $data);
        $string = '';
        foreach ($items as $row) {
            switch (trim($row)) {
                case 'ver':
                    $string .= '<a href="' . base_url() . 'manager/' . $controlador . '/observar/' . $id . '"><i class="fa fa-search text-primary"></i> Observar</a>';
                    $string .= '<br/>';
                    break;
                case 'editar':
                    if ($estado == 0 || $estado == 3) {
                        $string .= '<a href="' . base_url() . 'manager/' . $controlador . '/editar/' . $id . '"><i class="fa fa-pencil"></i> Editar</a>';
                        $string .= '<br/>';
                    }
                    break;
                case 'denegar':
                    if ($estado == 0) {
                        $string .= '<a href="" class="denegar" data-id="' . $controlador . '" data-url="' . base_url() . 'manager/' . $controlador . '/accion_denegar/' . $id . '"><i class="fa fa-ban"></i> Bloquear</a>';
                        $string .= '<br />';
                    }
                    break;
                case 'permitir':
                    if ($estado == 1) {
                        $string .= '<a class="permitir" data-url="' . base_url() . 'manager/' . $controlador . '/accion_permitir/' . $id . '"><i class="fa fa-check"></i> Desbloquear</a>';
                        $string .= '<br />';
                    }
                    break;
                case 'eliminar':
                    if ($estado == 1 || $estado == 3) {
                        $string .= '<a href="" class="eliminar" data-url="' . base_url() . 'manager/' . $controlador . '/accion_eliminar/' . $id . '"><i class="fa fa-close"></i> Eliminar</a>';
                        $string .= '<br />';
                    }
                    break;
                default:
                    break;
            }
        }
        return $string;
    }



    

    public function accion_moneda($id, $data, $controlador, $estado) {
        $items = explode('|', $data);
        $string = '';
        foreach ($items as $row) {
            switch (trim($row)) {
                case 'editar':
                    if ($estado == 0 || $estado == 1) {
                        $string .= '<a href="' . base_url() . 'manager/' . $controlador . '/editar/' . $id . '"><i class="fa fa-pencil"></i> Editar</a>';
                        $string .= '<br/>';
                    }
                    break;
                case 'activar':
                    if ($estado == 1) {
                        $string .= '<a href="" class="activar" data-id="' . $controlador . '" data-url="' . base_url() . 'manager/' . $controlador . '/accion_activado/' . $id . '"><i class="fa fa-check-square-o"></i> Activar</a>';
                        $string .= '<br />';
                    }
                    break;
                case 'activado':
                    if ($estado == 0) {
                        $string .= '<a href=""class="activado" ><i class="fa fa-certificate"></i> Activado</a>';
                        $string .= '<br />';
                    }
                    break;
                default:
                    break;
            }
        }
        return $string;
    }


    public function estado_registro($estado) {
        switch ($estado) {
            case '0':
                        $estado= '<span class="label label-success">Activo</span>';
                        return $estado;
                break;
            case '1':
                        $estado = '<span class="label label-warning">Inactivo</span>';
                        return $estado;
            default:
                break;
        }
    } 

    

    public function estado($estado) {
        switch ($estado) {
            case '0':
                $estado = 'Activo';
                return $estado;
            case '1':
                $estado = 'Inactivo';
                return $estado;
            default:
                break;
        }
    }

    

     public function accion_imagen($id, $data, $controlador, $estado) {
        $items = explode('|', $data);
        $string = '';
        foreach ($items as $row) {
            switch (trim($row)) {
                case 'observar':
                    if ($estado == 0 || $estado == 1) {
                        $string .= '<a class="btn btn-info" href="' . base_url() . 'manager/' . $controlador . '/observar/' . $id . '"data-toggle="tooltip" title="Observar"><i class="glyphicon glyphicon-eye-open"></i></a>';
                        //$string .= '<br/>';
                        break;
                    }
                    break;
                case 'denegar':
                    if ($estado == 0) {
                        $string .= '<a href="" class="btn btn-warning denegar" data-id="' . $controlador . '" data-url="' . base_url() . 'manager/' . $controlador . '/accion_denegar/' . $id . '" data-toggle="tooltip" title="Bloquear"><i class="fa fa-unlock-alt"></i></a>';
                        //$string .= '<br />';
                    }
                    break;
                case 'permitir':
                    if ($estado == 1) {
                        $string .= '<a class="btn btn-success" href="' . base_url() . 'manager/' . $controlador . '/accion_permitir/' . $id . '" data-toggle="tooltip" title="Desbloquear"><i class="fa fa-unlock"></i></a>';
                        //$string .= '<br />';
                    }
                    break;
                case 'editar':
                    if ($estado == 0) {
                        $string .= '<a class="btn btn-primary" href="' . base_url() . 'manager/' . $controlador . '/editar/' . $id . '" data-toggle="tooltip" title="Editar"><i class="fa fa-pencil"></i></a>';
                        //$string .= '<br/>';
                    }
                    break;
                case 'subir':
                    if ($estado == 0) {
                    $string .= '<a  class="btn btn-success subir" data-url="' . base_url() . 'manager/' . $controlador . '/imagen_subir" '
                            . 'data-id="' . $id . '" data-toggle="tooltip" title="Subir"> '
                            . '<i class="fa fa-arrow-up"></i></a>';
                    //$string .= '<br/>';
                    }
                    break;
                case 'bajar':
                    if ($estado == 0) {
                    $string .= '<a  class="btn btn-success bajar" data-url="' . base_url() . 'manager/' . $controlador . '/imagen_bajar" '
                            . 'data-id="' . $id . '" data-toggle="tooltip" title="Bajar"> '
                            . '<i class="fa fa-arrow-down"></i></a>';
                    //$string .= '<br/>';
                    }
                    break;
                case 'eliminar':
                    if ($estado == 0) {
                        $string .= '<a  class="btn btn-danger eliminar" data-url="' . base_url() . 'manager/' . $controlador . '/accion_eliminar2/' . $id . '" '
                                . 'data-toggle="tooltip" title="Eliminar"> '
                                . '<i class="fa fa-trash-o"></i></a>';
                        //$string .= '<br />';
                    }
                    break;
                default:
                    break;
            }
        }
        return $string;
    }





    public function validacion($string, $config, $field) {
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


    public function aleatorio($length = 40, $lowercase = TRUE, $uppercase = FALSE, $number = TRUE, $specialchar = FALSE) {
        $source = '';
        if ($lowercase === TRUE) {
            $source .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if ($uppercase === TRUE) {
            $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($number === TRUE) {
            $source .= '1234567890';
        }
        if ($specialchar === TRUE) {
            $source .= '|@#~$%()=^*+[]{}-_';
        }
        if ($length > 0) {
            $rstr = "";
            $source = str_split($source, 1);
            for ($i = 1; $i <= $length; $i++) {
                mt_srand((double) microtime() * 1000000);
                $num = mt_rand(1, count($source));
                $rstr .= $source[$num - 1];
            }
        }
        return $rstr;
    }

    

}

