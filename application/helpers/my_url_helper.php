<?php

function direccionar($url) {
    $string = '<script>location.href="';
    $string .= $url;
    $string .= '"</script>';
    return $string;
}

function convertir_url($string) {
    $url = strtolower($string);
    $b = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú", "ñ", "Ñ");
    $c = array("a", "a", "e", "e", "i", "i", "o", "o", "u", "u", "n", "n");
    $string = str_replace($b, $c, $url);
    $spacer = "-";
    $string = trim($string);
    $string = strtolower($string);
    $string = trim(@ereg_replace("[^ A-Za-z0-9_]", " ", $string));
    $string = @ereg_replace("[ \t\n\r]+", "-", $string);
    $string = str_replace(" ", $spacer, $string);
    $string = @ereg_replace("[ -]+", "-", $string);
    return $string;
}

?>