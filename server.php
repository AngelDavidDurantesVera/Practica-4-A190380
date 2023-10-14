<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos) {
        if ($datos == "Frutas"){
            return join(",", array(
                "Mango",
                "Manzana",
                "Plátano",
                "Uva",
                "Rambután",
                "Fresa",
                "Melón",
                "Sandía"));
        }
        else  {
                return "No hay Frutas";
        }
    }
    $server = new soap_server(); //Se crea la instancia de SOAP
    $server->register("getFrutas"); // Indica el método o función a devolver
    if ( !isset( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
        $server->service($HTTP_RAW_POST_DATA);
?>