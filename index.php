<?php

    require "./vendor/autoload.php";
    $router = new \Bramus\Router\Router();
    


    $router->get("/bebe",function(){
        echo "que mas pues";
    });

    $router->post("/datos",function(){

        $_DATA = (file_get_contents("php://input") == "") ? ["Message" => "No hay data"]: json_decode(file_get_contents("php://input"), true);
        var_dump($_DATA);

    });




    $router->run();
?>