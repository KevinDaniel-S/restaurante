<?php 
      

        function conexion(){
            define("HOST","localhost");
            define("USER","kevin");
            define("PASS","1234");
            define("DATA","reservacion");
    
            try{
            $cn = new mysqli(HOST,USER,PASS,DATA);
            if($cn->connect_error){
                die("ERROR AL MOSTRAR LA BASE DE DATOS");
            }
            } catch (Exception $e){
                die("ERROR EN LA BASE DE DATOS");
            }
            return $cn;
        }
?>
