<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $sql = "SELECT * FROM historico WHERE placa = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $placa);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $dados = [];
    while ($linha = $resultado->fetch_assoc()) {
        $dados[] = $linha;
    }
    $_SESSION['resultados'] = $dados;
    $_SESSION['placa'] = $placa;
    header("Location: ../mostrar.html");
    exit();
} else {
    echo "Acesso inválido.";
}