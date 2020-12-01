<?php
$datos = [
    "1020TV" => ["1020TV","Televisor","precio" => "750€","stock" => 30,"marca"=>"LG","fecha"=>"13/11/2020"],
    "1518CM" => ["1518CM","Cámara","precio" => "325€",   "stock" => 22,"marca"=>"Nikon","fecha"=>"10/10/2020"],
    "2050CN" => ["2050CN","Consola","precio" => "299€",  "stock" => 15,"marca"=>"Nintendo","fecha"=>"23/09/2020"],
    "3065PT" => ["3065PT","Portátil","precio" => "595€", "stock" => 7,"marca"=>"Lenovo","fecha"=>"31/08/2020"],
    "3560AA" => ["3560AA","Aire Acondicionado","precio"=> "420€","stock"=>18,"marca"=>"Daikin","fecha"=>"09/09/2020"],
    "4090RC" => ["4090RC","Robot de Cocina","precio"=>"380€","stock"=>35,"marca"=>"Moulinex","fecha"=>"26/10/2020"],
    "5020MC" => ["5020MC","Microondas","precio"=>"175€","stock"=>8,"marca"=>"Candy","fecha"=>"19/07/2020"],
    "5575RI" => ["5575RI","Ratón inalámbrico","precio"=>"15€","stock"=>35,"marca"=>"Logitec","fecha"=>"24/10/2020"],
    "6070AV" => ["6070AV","Altavoces","precio"=>"30€","stock"=>4,"marca"=>"Sony","fecha"=>"01/10/2020"],
    "7025MV" => ["7025MV","Móvil","precio"=>"500€","stock"=>10,"marca"=>"Samsung","fecha"=>"30/11/2020"]
];
function obtenerDatos($tabla,$codigos=[],$adicional=""){
    
    if(!empty($codigos)){
        $datos = [];
        if(!empty($adicional)){
            $datos = [];
            foreach ($tabla as $dato) {
                if(in_array($dato[0],$codigos)){
                    array_push($datos,array($dato[0],$dato[1],$dato[$adicional]));
                }
            }
        
        }else{
            foreach ($tabla as $dato) {
                if(in_array($dato[0],$codigos)){
                    array_push($datos,array($dato[0],$dato[1]));
                }
            }
        }
        return $datos;
    }

    return $tabla;
}
?>