<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM mensagens ORDER BY data_envio DESC");
$mensagens = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagens Recebidas</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .mensagem { background: white; border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Mensagens Recebidas</h1>
    <?php if (count($mensagens) > 0): ?>
        <?php foreach ($mensagens as $msg): ?>
            <div class="mensagem">
                <strong><?= htmlspecialchars($msg['nome']) ?></strong> 
                (<?= htmlspecialchars($msg['email']) ?>)<br>
                <?= nl2br(htmlspecialchars($msg['mensagem'])) ?><br>
                <em>Enviado em: <?= $msg['data_envio'] ?></em>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhuma mensagem recebida ainda.</p>
    <?php endif; ?>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>
