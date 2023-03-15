<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();

require('conectar.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION["email-usuario"] = $email;
$_SESSION["senha-usuario"] = $senha;

try {
  $stmt = $con->query("SELECT email, senha FROM helpaqui.usuarios WHERE email = '$email' AND senha = '$senha' AND atividade = '1'");

  $stmt->rowCount();
  if ($stmt->rowCount() > 0) {
    header('location:../../index-login/index-login.php');
    $_SESSION['parametrologin'] = TRUE;
  } else {
    header('location: tela-login.php');
    $_SESSION['erro'] = true;
  }
} catch (PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
  echo ("<br>" . "não conectado");
}

alerta("error", false, "Email ou senha incorretos");


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
