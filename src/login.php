<?php
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Escapa os dados para evitar injeção SQL
    $usuario = $conexao->real_escape_string($_POST['usuario']);
    $senha   = sha1($_POST['senha']); // criptografa como no banco

    // Consulta
    $sql = "SELECT * FROM login WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        // Login bem-sucedido
        header("Location: ../cadastro.html"); //caminho
        exit();
    } else {
        // Login falhou
        echo "Usuário ou senha inválidos!";
    }

echo "<p>SQL: $sql</p>";

    $conexao->close();
} else {
    echo "Acesso inválido!";
}
?>