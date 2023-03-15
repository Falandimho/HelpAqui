<?php

    try{
        $con = new PDO('mysql:host=localhost:3306;dbname=helpaqui','root','');
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $con->query("SELECT * FROM helpaqui.usuarios");

    }catch (PDOException $e){
        echo 'Erro: ' . $e->getMessage();
        echo ("<br>" . "não conectado");
    }
    ?>

<!-- VIVIane#1212 -->