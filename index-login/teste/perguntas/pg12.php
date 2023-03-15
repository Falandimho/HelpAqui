<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" type="text/css" href="../teste.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Prompt:wght@300&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<link rel="icon" type="imagem/png" href="../../../imagens/icone.png">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="emojirt" content="width=device-width, initial-scale=1.0">

	<script src="../emoji.js"></script>

	<title>Teste Vocacional</title>
</head>

<body>
		<div id="perguntas">
			<span id="progresso">
				<div id="barra-concluida"></div>
				<div id="barra-concluida"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
				<div id="barra-restante"></div>
			</span>
			<p>12 de 30</p>

			<h1>Eu costumo trabalhar melhor em equipe do que sozinho.</h1>

			<div id="respostas">
				<form method="post" id="form" action="attr-var.php">
					<input type="radio" value="1" name="pg12" id="feliz" />
					<label for="feliz">
						<span class="hovertext" data-hover="Concordo">
							<div class="feliz" onclick="felizVerde()"></div>
						</span>
					</label>

					<input type="radio" value="2" name="pg12" id="neutro" />
					<label for="neutro">
						<span class="hovertext" data-hover="Talvez">
							<div class="neutro" onclick="neutroAmar()"></div>
						</span>
					</label>

					<input type="radio" value="3" name="pg12" id="triste" />
					<label for="triste">
						<span class="hovertext" data-hover="Discordo">
							<div class="triste" onclick="tristeVer()"></div>
						</span>
					</label>

					<input type="submit" value="Proxima pergunta" id="proxima" />
				</form>
			</div>
		</div>
</body>

</html>