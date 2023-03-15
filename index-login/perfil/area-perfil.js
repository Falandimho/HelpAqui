//ajax abas//
$(document).ready(function () {
	$(".perfil").click(function () {
		$("#perfil").load("dadospes.php");
	});
});

$(document).ready(function () {
	$(".cursosfav").click(function () {
		$("#perfil").load("cursos-favoritos.php");
	});
});

$(document).ready(function () {
	$(".teste").click(function () {
		$("#perfil").load("teste-perfil.php");
	});
});

$(document).ready(function () {
	$(".sair").click(function () {
		$("#perfil").load("sair.html");
	});
});

$(document).ready(function () {
	$(".excluir").click(function () {
		$("#perfil").load("excluir.html");
	});
});
