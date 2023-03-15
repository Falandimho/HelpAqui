<?php
	//parametros
	$servidor = "localhost:3306";
	$baseDados = "helpaqui";
	$usuario = "root";
	$senha = "";
	
	//criando conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $baseDados);
	
	//checando conexao
	if (!$conexao):
		die ("Conexão falhou: ".mysqli_connect_error());
	else:
		//echo "Conectado com êxito<br>";
		//mysqli_close($conexao);
	endif;
?>