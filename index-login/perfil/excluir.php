<?php
    session_start();

    require ('../../index/cadastro-login/conectar.php');
    $email = $_SESSION['email-usuario'];

    $stmt = $con -> prepare('UPDATE `helpaqui`.`usuarios` SET atividade = :atividade where email = :email');
    $stmt -> execute(array(
        ':email' => $email,
        ':atividade' => '0'
    ));
    echo $stmt -> rowCount();
    if($stmt -> rowCount() > 0){
        session_destroy();
        header('location:../../index/index.php');
    }
?>