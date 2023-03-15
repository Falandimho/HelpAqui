<?php
session_start();

if (!isset($_SESSION['parametrologin'])) {
	header('location: ../index/index.php');
}
include('../index/cadastro-login/ConexaoBD.php');
include_once('../index/cadastro-login/conectar.php');

$email = $_SESSION["email-usuario"];
$senha = $_SESSION["senha-usuario"];


$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$instrucao = mysqli_query($conexao, $sql);

if ($instrucao->num_rows > 0) {

	while ($dados_usuario = mysqli_fetch_assoc($instrucao)) {

		$nome = $dados_usuario['nome'];
	}
}

$stmt = $con->query("SELECT icones.icone, usuarios.id_img from icones, usuarios WHERE icones.id = usuarios.id_img and email ='$email'");
$stmt->rowCount();

if($stmt->rowCount() > 0){
	while($dados_usuario = $stmt -> fetch(PDO::FETCH_ASSOC)) {
		$imgIcon = $dados_usuario['icone'];
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Prompt:wght@300&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

	<script src="goback.js"></script>

	<link rel="icon" type="imagem/png" href="../imagens/icone.png">

	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="rodape.css">
	<link rel="stylesheet" type="text/css" href="conteudo.css">

	<title>Help Aqui</title>
</head>

<body>
	<!-- menu !-->
	<header id="menu">
		<!--logo !-->
		<a href="index-login.php">
			<img src="../imagens/icone.png" class="logo-menu">
		</a>
		<!-- fim logo !-->

		<ul>
			<li> <a href="profissoes/profissoes.php"> Profissões </a></li>
			<li> <a href="cursos/cursos.php"> Cursos </a></li>
			<li> <a href="teste/teste.php"> Teste </a></li>
		</ul>
		<span>
			<div id="perfil">
				<a href="perfil/area-perfil.php">
					<span><?php echo $nome; ?></span>
					<img src="../<?php if (empty($imgIcon)) { ?>
					imagens/perfil/iconemen1.png
				<?php
									} else {
										echo $imgIcon;
									} ?>">
				</a>
			</div>
		</span>
	</header>
	<!-- Final do menu !-->

	<!-- conteudo !-->
	<div class="meia-lua">
		<h1 class="texto_fundo"> DESCUBRA A CARREIRA QUE SE ENCAIXE <br> MELHOR COM VOCÊ </h1>
		<a href="teste/teste.php"> <button class="botao-teste"> Faça seu teste </button> </a>
	</div>

	<a href="#passo_passo">
		<div class="setinha">
			<span class="material-symbols-outlined" style="color: #452877; width: fit-content;"> keyboard_arrow_down </span>
		</div>
	</a>

	<div id="passo_passo" class="shapedividers_com-8298">
		<br>
		<h1 class="texto_passo"> SIGA AS INSTRUÇÕES </h1>
		<div class="linhas">
			<p class="texto_linhas1"> Faça o cadastro em nosso site </p>
			<p class="texto_linha"> Cadastre-se para realizar o teste vocacional. </p>
		</div>
		<div class="linhas">
			<p class="texto_linhas1"> Inicie o teste </p>
			<p class="texto_linha"> O teste terá 30 afirmações, onde você deverá dizer se concorda ou discorda, clicando nos emojis que aparecerão abaixo das afirmações.</p>
		</div>
		<div class="linhas">
			<p class="texto_linhas1"> Concorde ou discorde das afirmações </p>
			<P class="texto_linha">Ao final será mostrado as áras que mais se encaixam com você baseado nas suas respostas.</P>
		</div>
	</div>

	<div id="backVocacao">
		<div id="vocacao">
			<h2> Descubra sua vocação <br> e amplie seus conhecimentos <br> com cursos gratuitos</h2>
			<P>Aqui você poderá encontrar a área mais indicada <br> para você e se aprofundar na área que <br> desejar com cursos gratuitos.</P>
			<img src="../imagens/vocacao.png">
		</div>
	</div>

	<div id="us" class="shapedividers_com-4186">
		<h1>Desenvolvido por:</h1>

		<div class="p1">
			<img src="../imagens/us/tony.png">
			<p class="nome">Anthony Emanuel</p>
			<P class="desc">Responsável por:</p>
			<P class="desc1">PHP e CSS</P>
		</div>
		<div class="p2">
			<img src="../imagens/us/vivi.png">
			<p class="nome">Viviane dos Santos</p>
			<P class="desc">Responsável por:</p>
			<p class="desc1">JavaScript e CSS</P>
		</div>
		<div class="p3">
			<img src="../imagens/us/pablo.png">
			<p class="nome">Pablo Gabriel</p>
			<P class="desc"><b>Responsável por:</b></p>
			<p class="desc1">JavaScript e CSS</P>
		</div>
		<div class="p4">
			<img src="../imagens/us/mari.png">
			<p class="nome">Mariana Cazoni</p>
			<P class="desc">Responsável por:</P>
			<p class="desc1">Pesquisas</p>
		</div>
	</div>
	<!--final do conteudo !-->

	<footer id="rodape">
		<img src="../imagens/logo.png" class="logo-rodape">

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
				<a href="profissoes/profissoes.php">
					<p style="position: absolute; top: 2em">Profissões</p>
				</a>
				<a href="cursos/cursos.php">
					<p style="position: absolute; top: 3.1em">Cursos</p>
				</a>
				<a href="teste/teste.php">
					<p style="position: absolute; top: 4.2em">Teste</p>
				</a>
			</div>
			<div id="redes">
				<a href="https://www.instagram.com/" target="_blank"><img src="../imagens/icones/insta.png" onmouseover="this.src='../imagens/icones/instacl.png'" onmouseout="this.src='../imagens/icones/insta.png'" style="position: absolute;"> </a>
				<a href="https://www.facebook.com/" target="_blank"><img src="../imagens/icones/face.png" onmouseover="this.src='../imagens/icones/facecl.png'" onmouseout="this.src='../imagens/icones/face.png'" style="position: absolute; left: 3.5em"></a>
				<a href="https://www.twitter.com/" target="_blank"><img src="../imagens/icones/twitter.png" onmouseover="this.src='../imagens/icones/twittercl.png'" onmouseout="this.src='../imagens/icones/twitter.png'" style="position: absolute; left: 7em"></a>
			</div>
		</div>
	</footer>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/superagent/4.1.0/superagent.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.7.2/bluebird.min.js"></script>
</body>

</html>