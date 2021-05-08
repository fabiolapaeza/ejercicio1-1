<?php 
    /**
     * Metodo que filtra los items por color
     */
    function onlyGreen($obj) {
        return $obj->color == 'green';
    }

    /**
     * Metodo que obtiene y procesa la data
     */
    function getData() {
        $json = file_get_contents('https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items');
        $obj = json_decode($json);
        $green = array_filter($obj, "onlyGreen");
        // Nombre del archivo
        $fichero = 'Respuesta1.json';
        // Convierte los datos a json
        $respuesta = json_encode($green);
        // Guarda los datos en el archivo
        file_put_contents($fichero, $respuesta);
        // Retorna los datos
        print_r($respuesta);
    }
    
    return getData();
?>