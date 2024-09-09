<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Funcionário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login de funcionário</h2>
            <?php
            // Mensagem de erro ou sucesso
            if (isset($_POST['submit'])) {
                require 'login.php'; // Chama o script de login
            }
            ?>
            <form action="index.php" method="POST">
                <label for="numero-funcionario">Informe suas credenciais (Nº F)</label>
                <input type="text" id="numero-funcionario" name="numero-funcionario" required>
                
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
                
                <a href="#" class="forgot-password">Esqueceu a senha?</a>
                
                <a href="#" class="register-link">Não tem licença ainda?</a>
                <button type="submit" name="submit">Clique aqui!</button>
            </form>
        </div>
        <div class="right-box">
            <p>MEU BANCO DE DADOS!</p>
            <p>HELLO WORLD!</p>
        </div>
    </div>
</body>
</html>