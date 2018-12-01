<?php


class Complementos {
    

    public function comprobar_nombre ($nome) {
		$busca = array (
			'á','é','í','ó','ú','à','è','ì','ò','ù',
			'â','ê','î','ô','û','ä','ë','ï','ö','ü',
			'Á','É','Í','Ó','Ú','À','È','Ì','Ò','Ù',
			'Â','Ê','Î','Ô','Û','Ä','Ë','Ï','Ö','Ü',
			'ñ','Ñ','ç','Ç',' ','(',')','?','¿','/',
			'#','º','ª','!','·','#','%','¬','=','¡',
			'^',';','"',"'",'+','[',']','{','}',';',
			'~','¤','¶','ø','þ','æ','ß','ð','«','»',
			'¢','µ','','\\',':','*','<','>','|','$',
			'&','@',',');
		$cambia = array (
			'a','e','i','o','u','a','e','i','o','u',
			'a','e','i','o','u','a','e','i','o','u',
			'A','E','I','O','U','A','E','I','O','U',
			'A','E','I','O','U','A','E','I','O','U',
			'n','N','c','C','_','_','_','_','_','_',
			'_','o','a','_','_','_','_','_','_','_',
			'_','_','_','_','_','_','_','_','_','_',
			'_','_','_','_','_','_','_','_','_','_',
			'_','_','_','_','_','_','_','_','_','_',
			'_','_','_');

	    return str_replace($busca, $cambia, trim($nome));
    }
    

 
    
    public function cortar_texto($text, $words){ 
	      $matches = preg_split("/\s+/", $text, $words + 1);
	      $sz = count($matches);
        if ($sz > $words) 
        {
        	unset($matches[$sz-1]);
        	return implode(' ',$matches)." ...";
        }
        return $text;
    }
    
    
    function clean($value) {
       if(!get_magic_quotes_gpc())
       { $value = addslashes($value); }
       $value = strip_tags($value);
       return $value;
    }
    
    public function cortar_texto_limpio($texto, $words){
        //Limpiar texto 
        if(!get_magic_quotes_gpc()){
             $texto = addslashes($texto);
        }
        $text = strip_tags($texto);
        //Cortar texto
      	$matches = preg_split("/\s+/", $text, $words + 1);
      	$sz = count($matches);
      	if ($sz > $words) 
      	{
      		unset($matches[$sz-1]);
      		return implode(' ',$matches)." ...";
      	}
      	return $text;
    }
    
    function dateDiff($fecha_registro) {
      $to = time();
      $hace= "hace";
      $fecha = preg_replace('/:[0-9][0-9][0-9]/','',$fecha_registro);
      $from = strtotime($fecha);
      $diff = $to - $from;
      $info = array();
      if($diff>31556926) {
        // Años
        $info['años'] = ($diff - ($diff%31556926))/31556926;
        $diff = $diff%31556926;
      }
       elseif($diff>2629743) {
        // Meses
        $info['meses'] = ($diff - ($diff%2629743))/2629743;
        $diff = $diff%2629743;
      }
      elseif($diff>604800) {
        // Semanas
        $info['semanas'] = ($diff - ($diff%604800))/604800;
        $diff = $diff%604800;
      }
      elseif($diff>86400) {
        // Dias
        $info['dias'] = ($diff - ($diff%86400))/86400;
        $diff = $diff%86400;
      }
      elseif($diff>3600) {
        // Horas
        $info['horas'] = ($diff - ($diff%3600))/3600;
        $diff = $diff%3600;
      }
      elseif($diff>60) {
        // Minutos
        $info['minutos'] = ($diff - ($diff%60))/60;
        $diff = $diff%60;
      }
      elseif($diff>0) {
      // Segundos
        $info['segundos'] = $diff;
      }
      $f = '';
      foreach($info as $k=>$v) {
        if($v>0) $f .= "$v $k, ";
      }
      return $hace." ".substr($f,0,-2);
    }
    
}
