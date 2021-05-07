<?php 

    function onlyGreen($obj) {
        return $obj->color == 'green';
    }

    function getData() {
        $json = file_get_contents('https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items');
        $obj = json_decode($json);
        $green = array_filter($obj, "onlyGreen");
        $fichero = 'Respuesta1.json';
        $respuesta = json_encode($green);
        file_put_contents($fichero, $respuesta);
        print_r($respuesta);
    }
    
    return getData();
?>