<?php
    namespace App;

    trait System{
        function __construct(){
            return (file_get_contents("php://input") == "") ? ["Message" => "No hay data"]: json_decode(file_get_contents("php://input"), true);
        }
    }

?>