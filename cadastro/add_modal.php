<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #00ffff">
                <h5 class="modal-title" id="ModalLabel">Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="add.php">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">CPF</label>
                        <div class="col-md-6">
                            <input type="text" name="cpf" class="form-control" placeholder="Digite apenas números" maxlength="11" onkeypress="$(this).mask('00000000000')" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Telefone</label>
                        <div class="col-md-6">
                            <input type="text" name="telefone" placeholder="Digite apenas números" maxlength="13" onkeypress="$(this).mask('00000000000')" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Data de Nasc.</label>
                        <div class="col-md-6">
                            <div class="input-group date">
                                <input type="date" id="dtaNasc" name="dtaNasc" class="form-control" required />
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Gênero</label>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="M" id="radio-sexo-masculino" required>
                                <label class="form-check-label" for="radio-sexo-masculino">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="F" id="radio-sexo-feminino" required>
                                <label class="form-check-label" for="radio-sexo-feminino">
                                    Feminino
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
                </form>
            </div>
        </div>
    </div>
</div>