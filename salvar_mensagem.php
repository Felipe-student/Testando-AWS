<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    if ($nome && $email && $mensagem) {
        $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (:nome, :email, :mensagem)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':mensagem' => $mensagem
        ]);
        echo "Mensagem enviada com sucesso! <a href='index.php'>Voltar</a>";
    } else {
        echo "Preencha todos os campos. <a href='index.php'>Voltar</a>";
    }
}
?>
