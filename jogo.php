<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['pontuacao'])){
    $_SESSION['pontuacao'] = 0;
}

$sql = "SELECT id, pergunta, resposta FROM perguntas ORDER BY RAND() LIMIT 1";
$result =  $conn->query($sql);

if ($result->num_rows > 0) {
    $perguntas = $result->fetch_assoc();
} else {
    die("Erro ao recuperar pergunta do banco de dados.");

}
$msg = '';
if (isset($_POST['resposta'])){
    $respostaUsuario = strtolower($_POST['resposta']);
    $respostaCorreta = strtolower($pergunta['resposta']);

    if ($respostaUsuario == $respostaCorreta){
        $_SESSION['pontuacao'] += 10;
        $msg = 'Parabéns! Resposta correta .';
    } else {
        $msg = 'Resposta incorreta ';
    }
print_r($respostaUsuario);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de respostas Biblicas</title>
</head>
<body>
<h1>Jogo da Bíblia</h1>

<?php if (isset($_SESSION['pergunta_atual'])): ?>
    <p><?php echo $_SESSION['pergunta_atual']['pergunta']; ?></p>
    <form method="post" action="jogo.php">
        <label for="resposta">Sua Resposta:</label>
        <input type="text" name="resposta" required>
        <input type="submit" value="Enviar Resposta">
    </form>
<?php else: ?>
    <p>Parabéns! Você completou o jogo. Sua pontuação total é: <?php echo $_SESSION['pontuacao']; ?></p>
    <p><a href="reset.php">Jogar Novamente</a></p>
<?php endif; ?>

<p>Pontuação Atual: <?php echo $_SESSION['pontuacao']; ?></p>

<p><?php echo $msg; ?></p>
</body>
</html>