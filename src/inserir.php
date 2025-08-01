<?php
include(__DIR__ . '/../src/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa      = $_POST['placa'];
    $veiculo    = $_POST['veiculo'];
    $nome       = $_POST['nome'];
    $data_manut = $_POST['data_manut'];
    $servico    = $_POST['servico'];

    $sql = "INSERT INTO historico (placa, veiculo, nome, data_manut, servico)
            VALUES ('$placa', '$veiculo', '$nome', '$data_manut', '$servico')";

    if ($conexao->query($sql) === TRUE) {
        // Redireciona para a página de sucesso
        header("Location: ../cadastro_sucesso.html");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    $conexao->close();
}
?>
