<?php

        $hostname = "localhost";
        $bancodedados = "trabalhoInter";
        $usuario = "root";
        $senha  = "goIab@021089";
        
    try 
    {
        $conn= new PDO ("mysql:host=localhost;dbname=$bancodedados","$usuario","$senha");
    
    echo "";
    } catch (PDOException $e) {
      echo "deu ruim";
    }

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>