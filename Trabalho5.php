<?php
session_start();

// Processar o formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Validar login e senha (simulação)
    if ($login === 'admin' && $senha === '12345') {
        // Armazenar informações na sessão
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['inicio'] = time();
        $_SESSION['ultima_requisicao'] = time();

        // Redirecionar para o dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        $erro = "Login ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($erro)) echo "<p style='color: red;'>$erro</p>"; ?>
    <form action="" method="POST">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
