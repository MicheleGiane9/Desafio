<?php
session_start();
include_once('conexao.php');

if (isset($_POST['add'])) {
    $database = new conexao();
    $db = $database->open();
    try {

        $stmt = $db->prepare("INSERT INTO cliente (nome, cpf, telefone, dtaNasc, genero) VALUES (:nome,:cpf, :telefone, :dtaNasc, :genero)");
        print_r($stmt);
        $_SESSION['message'] = ($stmt->execute(array(':nome' => $_POST['nome'], ':cpf' => $_POST['cpf'], ':telefone' => $_POST['telefone'], ':dtaNasc' => $_POST['dtaNasc'], ':genero' => $_POST['genero']))) ? 'Pessoa adicionado(a) com sucesso' : 'Não é possível adicionar';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

    $database->close();
} else {
    $_SESSION['message'] = 'Preencha o formulário';
}

header('location: index.php');
