<?php
session_start();
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

  <title>Logar-se</title>

</head>

<body>
  <div id="cadastro">
    <p class="h1-login">Login</p>
    <form method="post" action="login.php">

      <label for="email">Seu e-mail</label><br>
      <input id="email" name="email" required="required" type="email" placeholder="Email" /><br>

      <label for="senha">Sua senha</label><br>
      <input id="senha" name="senha" required="required" type="password" placeholder="Senha" /><br>

      <input type="submit" value="Logar" />
    </form>


    <span class="cad">
      <p>Ainda não tem uma conta?</p>
      <a href="tela-cadastro.php"><span class="cadButtom">Cadastrar-se</span></a>
    </span>
    <a onclick="goBack()"><span class="botao"> Voltar </span></a>
    <img src="../../imagens/cadastro.png" class="imagem">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<?php
if (isset($_SESSION['update'])) {
  alerta("success", false, "Informações atualizadas");
  unset($_SESSION['update']);
}

if (isset($_SESSION['erro'])) {
  alerta("error", false, "Email ou senha incorretos");
  unset($_SESSION['erro']);
}

function alerta($type, $title, $msg)
{
  echo "<script type='text/javascript'>
		Swal.fire({
			icon: '$type',
			title: '$title',
			text: '$msg',
			showConfirmButton: false,
			timer: 3000
		});
		</script>";
}
?>