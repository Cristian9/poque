<?php

    function dia($dia) {
        switch ($dia) {
            case 1: case 01: return "Lunes";
            case 2: case 02: return "Martes";
            case 3: case 03: return "Miércoles";
            case 4: case 04: return "Jueves";
            case 5: case 05: return "Viernes";
            case 6: case 06: return "Sábado";
            case 7: case 07: return "Domingo";
        }
    }

    function mes($mes) {
        switch ($mes) {
            case 1: case 01: return "Enero";
            case 2: case 02: return "Febrero";
            case 3: case 03: return "Marzo";
            case 4: case 04: return "Abril";
            case 5: case 05: return "Mayo";
            case 6: case 06: return "Junio";
            case 7: case 07: return "Julio";
            case 8: return "Agosto";
            case 9: return "Septiembre";
            case 10: return "Octubre";
            case 11: return "Noviembre";
            case 12: return "Diciembre";
        }
    }

    //ABREVIATURA DEL MES
    function abr_mes($mes) {
        switch ($mes) {
            case 1: case 01: return "Ene.";
            case 2: case 02: return "Feb.";
            case 3: case 03: return "Mar.";
            case 4: case 04: return "Abr.";
            case 5: case 05: return "May.";
            case 6: case 06: return "Jun.";
            case 7: case 07: return "Jul.";
            case 8: return "Ago.";
            case 9: return "Sept.";
            case 10: return "Oct.";
            case 11: return "Nov.";
            case 12: return "Dic.";
        }
    }

    function formato_fecha($date, $estilo="fecha"){
        $date = date("Y-m-d H:i:s a", strtotime($date));
        $delimiter = explode(" ", $date);
        $fecha = explode("-", $delimiter[0]);
        $dia = $fecha[2];
        $mes = $fecha[1];
        $anio = $fecha[0];
        $tiempo = explode(":", $delimiter[1]);
        $segundos = $tiempo[2];
        $minuto = $tiempo[1];
        $hora = $tiempo[0];
        $meridiem = strtolower($delimiter[2]);
        switch ($estilo) {
            case '1':
                # code...
                break;
            case 'solo_fecha':
                $string = $dia . "/" . $mes . "/" . $anio;
                break;
            case 'hora':
                $string = $hora . ":" . $minuto;
                break;
            case 'hora_completa':
                $string = $hora . ":" . $minuto . ":" . $segundos;
                break;
            case 'fecha_hora': //FECHA HORA
                $string = $dia . "/" . $mes . "/" . $anio . " " . $hora . ":" . $minuto;
                break;
            case 'fecha_hora_completo': //FECHA HORA
                $string = $dia . "/" . $mes . "/" . $anio . " " . $hora . ":" . $minuto . ":" . $segundos;
                break;
            case 'fecha': //FECHA
                $string = mes($mes) . " " . $dia . ", " . $anio;
                break;
            case 'abr': //ABREBIADO
                $string = abr_mes($mes) . " " . $dia . " " . $anio;
                break;
            case 'datetime_local': //ABREBIADO
                $string = $anio . "-" . $mes . "-" . $dia . "T" . $hora . ":" . $minuto;
                break;

            default:
                # code...
                break;
        }
        return $string;
    }

?>
