<div class="modal fade" id="delete_<?php echo $row['idcliente']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #00ffff">
                <h5 class="modal-title" id="ModalLabel">Deletar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">Tem certeza de que deseja excluir?</p>
                <h2 class="text-center"><?php echo 'Nome' . '-' . $row['nome'] . '<br>' .   'CPF'. '-' . $row['cpf']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="delete.php?id=<?php echo $row['idcliente']; ?>" class="btn btn-danger"> Sim</a>
            </div>
        </div>
    </div>
</div>