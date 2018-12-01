<?php

class Archivo {
    //DOCUMENTO
    public function documento($archivo, $tipo = 'multiple') {
        switch ($tipo) {
            case 'single':

                if (isset($_FILES[$archivo]['tmp_name']) &&
                        $_FILES[$archivo]['tmp_name'] != '') {
                    $value = $_FILES[$archivo];
                    $result = $this->checked_extention($value['name'], 'pdf|doc|docx|xls|xlsx');
                    if ($result === FALSE) {
                        return FALSE;
                    } else {
                        return $value;
                    }
                } else {
                    return FALSE;
                }
                break;
            case 'multiple':
                if (isset($_FILES[$archivo]['tmp_name'][0]) &&
                        $_FILES[$archivo]['tmp_name'][0] != '') {
                    $values = $_FILES[$archivo];
                    for ($i = 0; $i < count($values['tmp_name']); $i++) {
                        $result = $this->checked_extention($values['name'][$i], 'pdf');
                        if ($result === FALSE) {
                            continue;
                        } else {
                            $data['name'][] = $values['name'][$i];
                            $data['type'][] = $values['type'][$i];
                            $data['tmp_name'][] = $values['tmp_name'][$i];
                            $data['error'][] = $values['error'][$i];
                            $data['size'][] = $values['size'][$i];
                        }
                    }
                    return $data;
                } else {
                    return FALSE;
                }
                break;
            default:
                return FALSE;
        }
    }

    public function guardar_archivo($documento, $directorio){
        $i = 1;

        $nombre_completo = explode('.', $documento['name']);

        $nombre = strtolower(current($nombre_completo));

        $n_nombre=  str_replace(' ', '-', $nombre);

        $extencion = strtolower(end($nombre_completo));

        $resultado = $n_nombre . '-' . $i . '.' . $extencion;

        while (file_exists($directorio . '/' . $resultado)) {
            
            $pos = strpos($resultado, '.');

            $ni = (int) substr($resultado, $pos - 1, 1);

            $n_ni = $ni + 1;

            $resultado = $n_nombre . '-' . $n_ni . '.' . $extencion;
        }

        move_uploaded_file($documento['tmp_name'], $directorio . '/' . $resultado);

        return $resultado;
    }
    
    //IMAGEN
    public function archivo_1($archivo, $tipo = 'multiple') {
        switch ($tipo) {
            case 'single':

                if (isset($_FILES[$archivo]['tmp_name']) &&
                        $_FILES[$archivo]['tmp_name'] != '') {
                    $value = $_FILES[$archivo];
                    $result = $this->checked_extention($value['name'], 'jpeg|jpg|png|gif');
                    if ($result === FALSE) {
                        return FALSE;
                    } else {
                        return $value;
                    }
                } else {
                    return FALSE;
                }
                break;
            case 'multiple':
                if (isset($_FILES[$archivo]['tmp_name'][0]) &&
                        $_FILES[$archivo]['tmp_name'][0] != '') {
                    $values = $_FILES[$archivo];
                    for ($i = 0; $i < count($values['tmp_name']); $i++) {
                        $result = $this->checked_extention($values['name'][$i], 'jpeg|jpg|png|gif');
                        if ($result === FALSE) {
                            continue;
                        } else {
                            $data['name'][] = $values['name'][$i];
                            $data['type'][] = $values['type'][$i];
                            $data['tmp_name'][] = $values['tmp_name'][$i];
                            $data['error'][] = $values['error'][$i];
                            $data['size'][] = $values['size'][$i];
                        }
                    }
                    return $data;
                } else {
                    return FALSE;
                }
                break;
            default:
                return FALSE;
        }
    }

    public function guardar_imagen($documento, $directorio, $marca = array('marca' => '', 'tipo' => 'string'), $tamaño = 1600) {
        $i=1;
        $date = date_create();
        $timestamp = date_timestamp_get($date);
        $this->ci = & get_instance();
        $this->ci->load->library('imagen','url_comp');
        $this->ci->imagen->ready_listo($documento['tmp_name'], TRUE);
        $this->ci->imagen->cambiarToancho($tamaño);
        if ($marca['marca'] != '' && $marca['tipo'] == 'string') {
            $this->ci->imagen->stringMarcadeagua($marca['marca'], 70, 'FFFFFF', 'bottom right', 10, 10);
        }
        if ($marca['marca'] != '' && $marca['tipo'] == 'image') {
            $this->ci->imagen->imgenMarcadeagua($marca['marca'], 70, 'bottom right', 10, 10);
        }
        $resultado=$this->ci->url_comp->convertir_imagen($timestamp,$documento['name'],$i);
        $this->ci->imagen->guardar('./' . $directorio . '/' . $resultado);
        return $resultado;
    }

    public function guardar_multiple_imagenes($documento, $directorio, $marca = array('marca' => '', 'tipo' => 'string'), $tamaño = 1600) {
        $i = 1;
        $this->ci = & get_instance();
        $this->ci->load->library('imagen','url_comp');
        $date = date_create();
        $timestamp = date_timestamp_get($date);
        for ($i = 0; $i < count($documento['tmp_name']); $i++) {
            $this->ci->imagen->ready_listo($documento['tmp_name'][$i], TRUE);
            $this->ci->imagen->cambiarToancho($tamaño);
            if ($marca['marca'] != '' && $marca['tipo'] == 'string') {
                $this->ci->imagen->stringMarcadeagua($marca['marca'], 70, 'FFFFFF', 'bottom right', 10, 10);
            }
            if ($marca['marca'] != '' && $marca['tipo'] == 'image') {
                $this->ci->imagen->imgenMarcadeagua($marca['marca'], 70, 'bottom right', 10, 10);
            }
            $resultado=$this->ci->url_comp->convertir_imagen($timestamp,$documento['name'][$i],$i);
            $this->ci->imagen->guardar('./' . $directorio . '/' . $resultado);
            $data[] = $resultado;
        }

        return $data;
    }

    public function checked_extention($file, $extention = 'jpeg|jpg|png|gif') {
        $file_name = strtolower($file);
        $data = explode('|', $extention);
        $ext = array();
        foreach ($data as $items) {
            $ext[] = trim($items);
        }
        $list_white = $ext;
        $list_black = array('php', 'php3', 'php4', 'phtml', 'exe', 'html');
        $tmp = explode('.', $file_name);
        $file_extention = strtolower(end($tmp));
        if (!in_array($file_extention, $list_white)) {
            return FALSE;
        } elseif (in_array($file_extention, $list_black)) {
            return FALSE;
        }
        return TRUE;
    }

    public function eliminar_imagen($archivo, $directorio) {
        if (!file_exists('./' . $directorio . '/' . $archivo)) {
            return FALSE;
        } else {
            @unlink('./' . $directorio . '/' . $archivo);
            return TRUE;
        }
    }

    public function cortar_texto($text, $number) {
        $cadena = substr($text, 0, $number);
        $cadena = substr($text, 0, strrpos($cadena, ' '));
        $cadena = $cadena . "...";
        return $cadena;
    }


    public function correlativo($numero='',$total){
        $cor='0';
        if($numero == ''){
            for($i=1;$i<$total-1;$i++){
                $cor.='0';
            }
            $tmp = $cor.'1';
            return $tmp;
        }else{
            $tmp = $numero + 1;
            $len = strlen($tmp);
            for($i=1;$i<$total-$len;$i++){
                $cor.='0';
            }
            $final = $cor.''.$tmp;
            return $final;
        }
    }

}
