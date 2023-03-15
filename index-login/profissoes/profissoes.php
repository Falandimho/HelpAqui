<?php
session_start();

if (!isset($_SESSION['parametrologin'])) {
	header('location: ../../index.php');
}
include('../../index/cadastro-login/ConexaoBD.php');

$email = $_SESSION["email-usuario"];
$senha = $_SESSION["senha-usuario"];


$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$instrucao = mysqli_query($conexao, $sql);

if ($instrucao->num_rows > 0) {

	while ($dados_usuario = mysqli_fetch_assoc($instrucao)) {

		$nome = $dados_usuario['nome'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="profissoes.css">
  <link rel="stylesheet" type="text/css" href="../menu.css">
  <link rel="stylesheet" type="text/css" href="../rodape.css">
  <link rel="stylesheet" type="text/css" href="../conteudo.css">

  <link rel="icon" type="imagem/png" href="../../imagens/icone.png">

  <script src="../goback.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

</head>

<body>

  <header id="menu">
    <a href="../index-login.php">
      <img src="../../imagens/icone.png" class="logo-menu">
    </a>
		<ul>
			<li> <a href="profissoes.php"> Profissões </a></li>
			<li> <a href="../cursos/cursos.php"> Cursos </a></li>
			<li> <a href="../teste/teste.php"> Teste </a></li>
		</ul>
		<span>
      <div id="perfil">
		    <a href="../perfil/area-perfil.php">
          <p><?php echo $nome;?></p>
			    <img src="../../<?php if(!isset($_SESSION["icone"])){
					echo "imagens/perfil/iconemen1.png";
				}else{
					echo $_SESSION["icone"];
				}
				?>">
		    </a>
	    </div>
    </span>
	</header>

	<ul class="menu">
	<li><a class="tab1"> Engenharia </a></li>
	<li><a class="tab2"> Administrador de empresas   </a></li>
  	<li><a class="tab3"> Profissional de tecnologia da informação </li>
  	<li><a class="tab4"> Atleta </li>
  	<li><a class="tab5"> Técnico em eletrotécnica </a></li>
	<li><a class="tab6"> Técnico em logística </a></li>
	<li><a class="tab7"> Técnico em recursos humanos </a></li>
  	<li><a class="tab8"> Técnico em segurança do trabalho (TST) </a></li>
  	<li><a class="tab9"> Artes </a></li>
  	<li style="border-bottom: 1px;"><a class="tab10"> Jornalismo </a></li>
</ul>

<!-- <div style="position:absolute; top: 132px; left:710px; background-color: rgb(241, 241, 241); height: 800px; width: 40px;"></div> -->

<article>
	<div id="area">
		<div id="tab1">
			<h2> Engenharia </h2>
			<p> A primeira profissão da lista é a de Engenheiro. Com várias áreas de especialização, esse profissional utiliza conhecimentos técnicos, científicos e matemáticos para o desenvolvimento ou aperfeiçoamento de estruturas, sistemas, aparelhos, materiais, máquinas, entre outros. Diferentemente de outras profissões, os cursos de engenharia são sempre com ênfase em determinada área de atuação, tais como, Engenharia de Materiais e Engenharia de Energia. </p>
				<br>
			<b> Cursos: </b> Engenharia Civil, Engenharia Elétrica, Engenharia da Computação, Engenharia de Produção, Engenharia de Alimentos, Engenharia Mecânica, entre outros. <br> 
			<b> Duração da graduação: </b> No mínimo, cinco anos <br> 
			<b> Qual é o salário médio: </b> R$ 7.529,14
		</div>
	</div>
</article>

<footer id="rodape" style="top: 30%;">
		<img src="../../imagens/logo.png" class="logo-rodape">

		<div class="rodape">
			<div id="iconesuporte">
				<!--email!--> <span class="material-symbols-outlined">mail</span>
				<!--fale conosco !--> <span class="material-symbols-outlined"> call </span>
				<!--feedback!--> <span class="material-symbols-outlined"> mode_comment </span>
			</div>

			<div id="suporterodape">
				<b>
					<p class="titulo">Precisa de suporte?</p>
				</b>
				<p style="position: absolute; top: 2em; left: 1.5em"><a href="mailto:helpaquicontato@gmail.com">helpaquicontato@gmail.com</a></p>
				<p style="position: absolute; top: 3.6em; left: 1.5em">11 00000 0000</p>
				<p style="position: absolute; top: 5.2em; left: 1.5em">Dê seu Feedback</p>
			</div>

			<div id="iniciorodape">
				<b>
					<p class="titulo">Início</p>
				</b>
				<a href="profissoes.php">
					<p style="position: absolute; top: 2em">Profissões</p>
				</a>
				<a href="../cursos/cursos.php">
					<p style="position: absolute; top: 3.1em">Cursos</p>
				</a>
				<a href="../teste/teste.php">
					<p style="position: absolute; top: 4.2em">Teste</p>
				</a>
			</div>
			<div id="redes">
				<a href="https://www.instagram.com/" target="_blank"><img src="../../imagens/icones/insta.png"
						onmouseover="this.src='../../imagens/icones/instacl.png'" onmouseout="this.src='../../imagens/icones/insta.png'"
						style="position: absolute;"> </a>
				<a href="https://www.facebook.com/" target="_blank"><img src="../../imagens/icones/face.png"
						onmouseover="this.src='../../imagens/icones/facecl.png'" onmouseout="this.src='../../imagens/icones/face.png'"
						style="position: absolute; left: 3.5em"></a>
				<a href="https://www.twitter.com/" target="_blank"><img src="../../imagens/icones/twitter.png"
						onmouseover="this.src='../../imagens/icones/twittercl.png'" onmouseout="this.src='../../imagens/icones/twitter.png'"
						style="position: absolute; left: 7em"></a>
			</div>
		</div>
	</footer>
  
  <script src="profissoes.js"> </script>
  <script src="../popup.js"> </script>
</body>
</html>