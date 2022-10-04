<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Pessoas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <img src="img/logo.png" class=" rounded mx-auto d-block img-fluid" alt="..." width=165 height=50>
        <h1 class="page-header text-center"> Área de Cadastro de Pessoas</h1>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addnew"> Add
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                    </svg> </button>
                <?php
                session_start();
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>Gênero</th>
                        <th>Ação</th>
                    </thead>
                    <tbody>
                        <?php
                        include_once('conexao.php');
                        $database = new Conexao();
                        $db = $database->open();
                        try {
                            $sql = 'select idcliente, nome, cpf, telefone, date_format(dtaNasc,"%d/%m/%Y") as dtaNasc, genero from cliente';
                            foreach ($db->query($sql) as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row['idcliente']; ?></td>
                                    <td><?php echo $row['nome']; ?></td>
                                    <td><?php echo $row['cpf']; ?></td>
                                    <td><?php echo $row['telefone']; ?></td>
                                    <td><?php echo (($row['dtaNasc'])); ?></td>
                                    <td><?php echo $row['genero']; ?></td>
                                    <td>
                                        <a href="#delete_<?php echo $row['idcliente']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal">Exluir</a>
                                    </td>
                                    <?php include('delete_modal.php'); ?>
                                </tr>
                        <?php
                            }
                        } catch (PDOException $e) {
                            echo "Problema na conexão: " . $e->getMessage();
                        }
                        $database->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('add_modal.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>