<?php

session_start();
include_once('conexao.php');

if (isset($_GET['id'])) {
    $database = new conexao();
    $db = $database->open();
    try {
        $sql = "DELETE FROM cliente WHERE idcliente = '" . $_GET['id'] . "'";
        $_SESSION['message'] = ($db->exec($sql)) ? 'Pessoa deletada com sucesso' : 'Não foi possível excluir cliente';
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }

 
    $database->close();
} else {
    $_SESSION['message'] = 'Selecione a pessoa para exluir';
}

header('location: index.php');
