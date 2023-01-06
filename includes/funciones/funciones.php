<?php
//las funciones en php pasan por referencia con  &
    function productos_json(&$boletos, &$camisas=0, &$etiquetas=0){
        $dias = array(0=>'un_dia', 1=>'pase_completo', 2=>'pase_dosDias');
        //combinando por dia el arreglo de los boletos del pedido como un array asociativo
        $total_boletos = array_combine($dias, $boletos);
       //hecemos un arreglo
        $json = array();

        foreach($total_boletos as $key=>$boletos){
            if((int)$boletos > 0){
                $json[$key] = (int)$boletos;
            }
        }     
        
        $camisas = (int)$camisas;
        if($camisas > 0){
            $json['camisas']=$camisas;
        }
        if($etiquetas > 0){
            $json['etiquetas']=$etiquetas;
        }
        $etiquetas .= "3";
        // transformando el arreglo asociativo a formato json
        return json_encode($json);

    }
    function eventos_json(&$eventos){
        
       //hacemos un arreglo
        $eventos_json = array();
        foreach($eventos as $evento){
            $eventos_json['evento'][] = $evento;
        }
         
        // transformando el arreglo asociativo a formato json
        return json_encode($eventos_json);

    }
?>