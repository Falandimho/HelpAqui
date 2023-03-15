<?php
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['result'] = true;

$resp1 = $_SESSION['resp1'];
$resp2 = $_SESSION['resp2'];
$resp3 = $_SESSION['resp3'];
$resp4 = $_SESSION['resp4'];
$resp5 = $_SESSION['resp5'];
$resp6 = $_SESSION['resp6'];
$resp7 = $_SESSION['resp7'];
$resp8 = $_SESSION['resp8'];
$resp9 = $_SESSION['resp9'];
$resp10 = $_SESSION['resp10'];
$resp11 = $_SESSION['resp11'];
$resp12 = $_SESSION['resp12'];
$resp13 = $_SESSION['resp13'];
$resp14 = $_SESSION['resp14'];
$resp15 = $_SESSION['resp15'];
$resp16 = $_SESSION['resp16'];
$resp17 = $_SESSION['resp17'];
$resp18 = $_SESSION['resp18'];
$resp19 = $_SESSION['resp19'];
$resp20 = $_SESSION['resp20'];
$resp21 = $_SESSION['resp21'];
$resp22 = $_SESSION['resp22'];
$resp23 = $_SESSION['resp23'];
$resp24 = $_SESSION['resp24'];
$resp25 = $_SESSION['resp25'];
$resp26 = $_SESSION['resp26'];
$resp27 = $_SESSION['resp27'];
$resp28 = $_SESSION['resp28'];
$resp29 = $_SESSION['resp29'];
$resp30 = $_SESSION['resp30'];

$eng = 0;
$adm = 0;
$ti = 0;
$atle = 0;
$eletro = 0;
$log = 0;
$rh = 0;
$tst = 0;
$artes = 0;
$jorn = 0;

if ($resp1 == 1) {
	$artes++;
} else if ($resp1 == 3) {
	$artes--;
}

if ($resp2 == 1) {
	$adm++;
} else if ($resp2 == 3) {
	$adm--;
}

if ($resp3 == 1) {
	$jorn++;
} else if ($resp3 == 3) {
	$jorn--;
}

if ($resp4 == 1) {
	$ti++;
} else if ($resp4 == 3) {
	$ti--;
}

if ($resp5 == 1) {
	$atle++;
} else if ($resp5 == 3) {
	$atle--;
}

if ($resp6 == 1) {
	$rh++;
} else if ($resp6 == 3) {
	$rh--;
}

if ($resp7 == 1) {
	$eng++;
} else if ($resp7 == 3) {
	$eng--;
}

if ($resp8 == 1) {
	$atle++;
} else if ($resp8 == 3) {
	$atle--;
}

if ($resp9 == 1) {
	$tst++;
} else if ($resp9 == 3) {
	$tst--;
}

if ($resp10 == 1) {
	$artes++;
} else if ($resp10 == 3) {
	$artes--;
}

if ($resp11 == 1) {
	$eletro++;
} else if ($resp11 == 3) {
	$eletro--;
}

if ($resp12 == 1) {
	$log++;
} else if ($resp12 == 3) {
	$log--;
}

if ($resp13 == 1) {
	$tst++;
} else if ($resp13 == 3) {
	$tst--;
}

if ($resp14 == 1) {
	$eng++;
} else if ($resp14 == 3) {
	$eng--;
}

if ($resp15 == 1) {
	$adm++;
} else if ($resp15 == 3) {
	$adm--;
}

if ($resp16 == 1) {
	$ti++;
} else if ($resp16 == 3) {
	$ti--;
}

if ($resp17 == 1) {
	$atle++;
} else if ($resp17 == 3) {
	$atle--;
}

if ($resp18 == 1) {
	$eletro++;
} else if ($resp18 == 3) {
	$eletro--;
}

if ($resp19 == 1) {
	$rh++;
} else if ($resp19 == 3) {
	$rh--;
}

if ($resp20 == 1) {
	$jorn++;
} else if ($resp20 == 3) {
	$jorn--;
}

if ($resp21 == 1) {
	$artes++;
} else if ($resp21 == 3) {
	$artes--;
}

if ($resp22 == 1) {
	$tst++;
} else if ($resp22 == 3) {
	$tst--;
}

if ($resp23 == 1) {
	$log++;
} else if ($resp23 == 3) {
	$log--;
}

if ($resp24 == 1) {
	$eng++;
} else if ($resp24 == 3) {
	$eng--;
}

if ($resp25 == 1) {
	$adm++;
} else if ($resp25 == 3) {
	$adm--;
}

if ($resp26 == 1) {
	$ti++;
} else if ($resp26 == 3) {
	$ti--;
}

if ($resp27 == 1) {
	$eletro++;
} else if ($resp27 == 3) {
	$eletro--;
}

if ($resp28 == 1) {
	$rh++;
} else if ($resp28 == 3) {
	$rh--;
}

if ($resp29 == 1) {
	$jorn++;
} else if ($resp29 == 3) {
	$jorn--;
}

if ($resp30 == 1) {
	$log++;
} else if ($resp30 == 3) {
	$log--;
}

$pontos = array(
	$eng,
	$adm,
	$ti,
	$atle,
	$eletro,
	$log,
	$rh,
	$tst,
	$artes,
	$jorn
);

$profissoes = array(
	"Engenharia",
	"Admistração",
	"Técnico em Informática",
	"Atletismo",
	"Técnico em Eletrotécnica",
	"Logística",
	"Recursos Humanos",
	"Segurança do Trabalho",
	"Artes",
	"Jornalismo"
);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Prompt:wght@300&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" type="text/css" href="../teste.css">

	<link rel="icon" type="imagem/png" href="../../../imagens/icone.png">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="emojirt" content="width=device-width, initial-scale=1.0">

	<script src="../emoji.js"></script>

	<title>Teste Vocacional</title>
</head>

<body>
	<div id="perguntas" style="top: 8em;">
		<h1 class="area">Você se encaixaria melhor nessas profissões:</h1>
		<div id="resultado">
			<h1 class="resultado">
				<?php

				for ($i = 0; $i < 10; $i++) {
					if ($pontos[$i] > 2) {
						echo $profissoes[$i] . "<br>";
					}
				}
				?>
			</h1>
		</div>
		<div class="parabens-dir"></div>
		<div class="parabens-esq"></div>
		<a href="../../index-login.php" id="voltar-endLINK">
			<div id="voltar-end"> Voltar para a tela inicial</div>
		</a>
	</div>
</body>

</html>