<?php
session_start();

require('conectar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../goback.js"></script>

	<link rel="stylesheet" type="text/css" href="cadastro.css">

	<link rel="icon" type="imagem/png" href="../../imagens/icone.png">

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<title>Cadastre-se</title>
</head>

<body>
	<div id="cadastro">
		<p class="h1-login">Cadastro</p>
		<form method="post">
			<label for="nome">Seu nome</label><br>
			<input id="nome" name="nome" required="required" type="text" placeholder="Nome" /><br>

			<label for="sobrenome">Seu sobrenome</label><br>
			<input id="sobrenome" name="sobrenome" required="required" type="text" placeholder="Sobrenome" /><br>

			<label for="email">Seu e-mail</label><br>
			<input id="email" name="email" required="required" type="email" placeholder="Email" /><br>

			<label for="senha">Sua senha</label><br>
			<input id="senha" name="senha" required="required" type="password" placeholder="Senha" /><br>

			<label for="conf_senha">Confirme a senha</label><br>
			<input id="conf_senha" name="conf_senha" required="required" type="password" placeholder="Confirme a senha" /><br>

			<input type="submit" value="Cadastrar" />

			<a onclick="goBack()"><span class="botao"> Voltar </span></a>

			<img src="../../imagens/cadastro.png" class="imagem">
		</form>
	</div>

	<?php

	if (isset($_POST['nome'])) {
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$conf_senha = $_POST['conf_senha'];

		if ($senha != $conf_senha) {
			alerta("error", "OPS", "As senhas não correspondem");
		} else {

			$stmt = $con->query("SELECT * FROM helpaqui.usuarios WHERE email = '$email' AND atividade = '0'");
			$stmt->rowCount();

			if ($stmt->rowCount() > 0) {
				$stmt = $con->prepare("UPDATE helpaqui.usuarios SET atividade = :atividade, nome = :nome, sobrenome = :sobrenome, senha = :senha WHERE email = :email");
				$stmt->execute(array(
					':atividade' => '1',
					':nome' => $nome,
					':sobrenome' => $sobrenome,
					':senha' => $senha,
					':email' => $email

				));
				$stmt->rowCount();

				if ($stmt->rowCount() > 0) {

					$_SESSION["email-usuario"] = $email;
					$_SESSION["senha-usuario"] = $senha;
					$_SESSION['parametrologin'] = TRUE;

					header('location:../../index-login/index-login.php');
				}
			} else {
				$stmt = $con->query("SELECT * FROM helpaqui.usuarios WHERE email = '$email' AND atividade = '1'");
				$stmt->rowCount();

				if ($stmt->rowCount() > 0) {
					alerta("error", "OPS", "Esse email já está cadastrado.");
				} else {
					$stmt = $con->prepare('INSERT INTO helpaqui.usuarios (`atividade`, `nome`, `sobrenome`, `email`, `senha`) VALUES (:atividade, :nome, :sobrenome, :email, :senha)');
					$stmt->execute(array(
						':atividade' => "1",
						':nome' => $nome,
						':sobrenome' => $sobrenome,
						':email' => $email,
						':senha' => $senha
					));
					$_SESSION["email-usuario"] = $email;
					$_SESSION["senha-usuario"] = $senha;
					$_SESSION['parametrologin'] = TRUE;

					header('location:../../index-login/index-login.php');
				}
			}
		}
	}

	function alerta($type, $title, $msg)
	{
		echo "<script type='text/javascript'>
		Swal.fire({
			icon: '$type',
			title: '$title',
			text: '$msg',
			showConfirmButton: false,
			timer: 2000
		});
		</script>";
	}
	?>
</body>

</html>