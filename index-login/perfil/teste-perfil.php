<?php
session_start(); 
if(isset($_SESSION['result'])) {
    include_once('../teste/perguntas/end.php');
}else{
    echo "<div id='teste'>
            <h1>Clique no botão para iniciar o teste</h1>
                <a href='../teste/teste.php'>
                    <span class='botao'>Inicar o teste</span>
                </a>
        </div>";
}

?>

<head>
    <style>
        #teste{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        #teste h1{
            text-align: center;
            color: #31185f;
            font-size: 2.5em;
            position: relative;
            top: 50px;
        }
        #teste span{
            background-color: #31185f;
            width: fit-content;
            height: fit-content;
            padding: 10px 20px;
            border-radius: 20px;
            color: #fff;
            font-size: 1.5em;
        }
        #teste span:hover{
            background-color: #4b2593;
            -webkit-transition: all 0.4s linear;
            transition: all 0.2s linear;
        }
        #teste a{
            width: fit-content;
            position: relative;
            top: -150px;
        }
    </style>
</head>