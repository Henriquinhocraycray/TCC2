<?php
if (isset($_POST['submit'])) {
    $usuario = $_POST['numero-funcionario'];
    $senha = $_POST['senha'];

    // Simulação de verificação de login
    if ($usuario === 'admin' && $senha === '1234') {
        echo "<p style='color:green;'>Login bem-sucedido!</p>";
    } else {
        echo "<p style='color:red;'>Número de funcionário ou senha incorretos!</p>";
    }
}
?>