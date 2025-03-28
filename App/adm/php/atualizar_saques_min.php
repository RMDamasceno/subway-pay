<?php
include './../../conectarbanco.php';

//$conn = new mysqli('localhost', $config['db_user'], $config['db_pass'], $config['db_name']);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recebe o novo valor do formulário
$novoValor2 = $_POST['novo_valor'];

// Validações adicionais podem ser feitas aqui

// Atualiza o valor no banco de dados
$sqlUpdate = "UPDATE app SET saques_min = ? LIMIT 1";
$stmt = $conn->prepare($sqlUpdate);
$stmt->bind_param("i", $novoValor2); // "i" indica um parâmetro do tipo inteiro
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Valor atualizado com sucesso!";
} else {
    echo "Erro ao atualizar o valor: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
