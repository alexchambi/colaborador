<?php

    function conexion(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "db_empresa";

        $conexion = mysqli_connect($server, $user, $password, $database);

        return $conexion;
    }

    if(conexion()){
        #echo "BD conectado";
    }
    else{
        #echo "Error Conexion";
    }


?>