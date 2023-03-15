<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cursos</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="../menu.css">
  <link rel="stylesheet" type="text/css" href="../rodape.css">
  <link rel="stylesheet" type="text/css" href="../conteudo.css">
  <link rel="stylesheet" type="text/css" href="cursos.css">
  <link rel="stylesheet" type="text/css" href="../cadastro-login/login.css">

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
		<!--logo !-->
		<a href="../index.php">
			<img src="../../imagens/icone.png" class="logo-menu">
		</a>
		<!-- fim logo !-->

		<ul>
			<li> <a href="../profissoes/profissoes.php"> Profissões </a></li>
			<li> <a href="cursos.php"> Cursos </a></li>
			<li> <a href="../cadastro-login/fazercad.html"> Teste </a></li>
		</ul>
		<span>
			<div id="login-container">LOGIN</div>
		</span>
</header>

<!-- Login !-->
	<!-- <div class="background">
		<div class="content_login">
			<span class="material-symbols-outlined" id="login4"> close </span>
			<div id="login">
				<form method="post" action="cadastro-login/login.php" id="form-login" name="form-login">
					<h1 id="h1-login">Login</h1>
					<p>
						<label for="email">Seu email</label>
						<input id="email" name="email" required="required" type="email" placeholder="Email" />
					</p>
					<p>
						<label for="senha">Sua senha </label>
						<input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
					</p>
					<p>
						<input type="submit" value="Logar" />
					</p>
					<p class="link">
						Ainda não tem conta?
						<a class="botao_cad" href="cadastro-login/tela-cadastro.php"><span>Cadastre-se</span></a>
					</p>
				</form>
			</div>
		</div>
	</div> -->
<!-- Final login -->

<ul class="menu">
	<li><a class="tab1"> Engenharia </a></li>
	<li><a class="tab2"> Administrador de empresas   </a></li>
  	<li><a class="tab3"> Tecnologia da informação </li>
  	<li><a class="tab4"> Atleta </li>
  	<li><a class="tab5"> Eletrotécnica </a></li>
	<li><a class="tab6"> Logística </a></li>
	<li><a class="tab7"> Recursos Humanos </a></li>
  	<li><a class="tab8"> Segurança do trabalho (TST) </a></li>
  	<li><a class="tab9"> Artes </a></li>
  	<li style="border-bottom: 1px;"><a class="tab10"> Jornalismo </a></li>
</ul>
    
<article>
	<div id="area">
		<h2> Engenharia </h2>
		<div class="curso1">
			<img src="../../imagens/cursos/eng-civil.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-civil"> Engenharia civil </a>
			<p><b> Duração:</b> em média, 5 anos.</p>
		</div>
		<div class="curso2">
			<img src="../../imagens/cursos/eng-eletrica.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-eletrica"> Engenharia elétrica </a>
			<p><b> Duração:</b> em média, 5 anos.</p>
		</div>
		<div class="curso3">
			<img src="../../imagens/cursos/eng-computacao.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-de-computacao"> Engenharia da computação </a>
			<p><b> Duração:</b> em média, 5 anos.</p>
		</div>
		<div class="curso4">
			<img src="../../imagens/cursos/eng-producao.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-de-producao"> Engenharia de produção </a>
			<p><b> Duração: </b> em média, 5 anos.</p>
		</div>
		<div class="curso5">
			<img src="../../imagens/cursos/eng-alimentos.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-de-alimentos"> Engenharia de alimentos </a>
			<p><b> Duração:</b> em média, 5 anos.</p>
		</div>
		<div class="curso6">
			<img src="../../imagens/cursos/eng-mecanica.png">
			<a target="_blank" href="https://querobolsa.com.br/cursos-e-faculdades/engenharia-mecanica"> Engenharia mecânica </a>
			<p><b> Duração:</b> em média, 5 anos.</p>
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
				<a href="../profissoes/profissoes.php">
					<p style="position: absolute; top: 2em">Profissões</p>
				</a>
				<a href="cursos.php">
					<p style="position: absolute; top: 3.1em">Cursos</p>
				</a>
				<a href="../cadastro-login/fazercad.html">
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
  
  <script src="cursos.js"> </script>
  <script src="../popup.js"> </script>
</body>

</html>