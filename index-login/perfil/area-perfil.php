<?php
session_start();
include_once('../../index/cadastro-login/ConexaoBD.php');
include_once('../../index/cadastro-login/conectar.php');

if (!isset($_SESSION['parametrologin'])) {
    header('location: ../../index');
}
$email = $_SESSION["email-usuario"];
$senha = $_SESSION["senha-usuario"];

//exibir inforamções do usuario//
$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

$instrucao = mysqli_query($conexao, $sql);

if ($instrucao->num_rows > 0) {

    while ($dados_usuario = mysqli_fetch_assoc($instrucao)) {

        $id = $dados_usuario['id'];
        $nome = $dados_usuario['nome'];
        $sobrenome = $dados_usuario['sobrenome'];
        $email = $dados_usuario['email'];
        $senha = $dados_usuario['senha'];
        $idade = $dados_usuario['idade'];
    }
} else {
    echo "nao existe";
}

//mudar o icone do usuario//
if (isset($_POST['icone'])) {
    $icone = $_POST['icone'];

    $stmt = $con->prepare('UPDATE usuarios set id_img = :icone where id = :id');
    $stmt->execute(array(
        ':icone' => $icone,
        ':id' => $id
    ));
}
$stmt = $con->query("SELECT icones.icone, usuarios.id_img from icones, usuarios WHERE icones.id = usuarios.id_img and usuarios.id ='$id'");
$stmt->rowCount();

if ($stmt->rowCount() > 0) {
    while ($dados_usuario = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $imgIcon = $dados_usuario['icone'];
    }
}

//atualizar as inforamções//
if (isset($_POST['submit-dados'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($idade)) {
        $stmt = $con->prepare('UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, idade = :idade, email = :email, senha = :senha WHERE id = :id');
        $stmt->execute(array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':idade' => $idade,
            ':email' => $email,
            ':senha' => $senha,
            ':id' => $id
        ));
        $stmt->rowCount();
        if ($stmt->rowCount() > 0) {
            $_SESSION['update'] = true;
            header('location: ../../index/cadastro-login/tela-login.php');
        }
    }else{
        $stmt = $con->prepare('UPDATE usuarios SET nome = :nome, sobrenome = :sobrenome, email = :email, senha = :senha WHERE id = :id');
        $stmt->execute(array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':email' => $email,
            ':senha' => $senha,
            ':id' => $id
        ));
        $stmt->rowCount();
        if ($stmt->rowCount() > 0) {
            $_SESSION['update'] = true;
            header('location: ../../index/cadastro-login/tela-login.php');
        }
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

    <link rel="icon" type="imagem/png" href="../../imagens/icone.png">

    <link rel="stylesheet" type="text/css" href="../rodape.css">
    <link rel="stylesheet" type="text/css" href="../conteudo.css">
    <link rel="stylesheet" type="text/css" href="area-perfil.css">

    <title>Área do perfil</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../goback.js"></script>
</head>

<body>

    <!-- menu !-->
    <header id="menu">
        <!--logo !-->
        <a class="icone" href="../index-login.php">
            <img class="icone" src="../../imagens/icone.png" class="icone-menu">
        </a>
        <!-- fim logo !-->

        <a href="../index-login.php" class="botao-voltar">
            <span>
                Voltar
            </span>
        </a>
    </header>
    <!-- Final do menu !-->

    <!-- conteudo !-->
    <div id="perfilconfig">
        <div id="menuperfil">
            <ul style="position: relative; left: 1.5em;">
                <li><button class="perfil" type="button">Dados Pessoais</button></li>
                <!--<li><button class="cursosfav" type="button">Cursos Favoritos</button></li>!-->
                <li><button class="teste" type="button">Teste</button></li>
                <li><button class="sair" type="button">Sair</button></li>
                <li><button class="excluir" type="button">Deletar Conta</button></li>
            </ul>
        </div>

        <div id="perfil">
            <div class="imagemperfil">
                <img id="imagemperfil" class="iconeimg" src="../../
					<?php
                    if (!isset($imgIcon)) {
                    ?>
					imagens/perfil/iconemen1.png
					<?php
                    } else {
                        echo $imgIcon;
                    } ?>">
                <div class="edit">
                    <img id="edit" src="../../imagens/perfil/edit.png">
                    <!-- <p class="p"> Editar <span class="material-symbols-outlined" style="position: relative; top: 5px; left: -4px; font-size: 0.7em; color: #fff;">edit</span></p> -->
                </div>
            </div>

            <div id="imagempop" class="imagempop">
                <span id="close" style="width: auto; position: absolute; left: 0.5em; top: 0.5em; cursor: pointer;" class="material-symbols-outlined">
                    close
                </span>
                <div id="icones">
                    <form id="icones_form" method="post">
                        <input type="radio" name="icone" id="menino1" value="1" />
                        <label id="cu" for="menino1">
                            <img class="iconesimg" src="../../imagens/perfil/iconemen1.png">
                        </label>

                        <input type="radio" name="icone" id="menina1" value="2">
                        <label for="menina1">
                            <img class="iconesimg" src="../../imagens/perfil/iconemenina1.png">
                        </label>

                        <input type="radio" name="icone" id="menino2" value="3">
                        <label for="menino2">
                            <img class="iconesimg" src="../../imagens/perfil/iconemen2.png">
                        </label>

                        <input type="radio" name="icone" id="menina2" value="4" />
                        <label for="menina2">
                            <img class="iconesimg" src="../../imagens/perfil/iconemenina2.png">
                        </label>

                        <input type="radio" name="icone" id="menino3" value="5">
                        <label for="menino3">
                            <img class="iconesimg" src="../../imagens/perfil/iconemen3.png">
                        </label>

                        <input type="radio" name="icone" id="menina3" value="6">
                        <label for="menina3">
                            <img class="iconesimg" src="../../imagens/perfil/iconemenina3.png">
                        </label>

                        <input id="selecionar_img" type="submit" value="Selecionar" />
                    </form>
                </div>
            </div>

            <form id="dadospes" class="dadospes" method="post" action="area-perfil.php">
                <label for="nome">Seu nome</label><br>
                <input class="input" value="<?php echo $nome; ?>" id="nome" name="nome" required="required" type="text"><br>

                <label for="nome">Seu sobrenome</label><br>
                <input class="input" value="<?php echo $sobrenome; ?>" id="sobrenome" name="sobrenome" required="required" type="text"><br>

                <label for="idade">Sua idade</label><br>
                <input class="input" id="idade" name="idade" type="number" <?php if (empty($idade)) { ?> placeholder="Idade" <?php } else {
                                                                                                                                echo "value='" . $idade . "'";
                                                                                                                            } ?>>
                <br>

                <label for="email">Seu e-mail</label><br>
                <input class="input" value="<?php echo $email; ?>" id="email" name="email" required="required" type="email"><br>

                <label for="senha">Sua senha</label><br>
                <input class="input" id="senha" value="<?php echo $senha; ?>" name="senha" required="required" type="password"><br>

                <p style="color: rgb(247, 70, 70); font-size: 0.8em; position: absolute; z-index: 1;">*Para atualizar as informações é necessario desconectar da sessão.</p>

                <input form="dadospes" type="submit" name="submit-dados" value="Atualizar Informações" />
            </form>
        </div>
    </div>

    <script src="perfil.js"></script>
    <script src="area-perfil.js"></script>
</body>

</html>