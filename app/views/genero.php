<?php $this->layout("master"); ?>

<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Gênero</h2>
</div>


<div class="m-3">
    <!-- gatilho do modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#cadGenero">
      Cadastrar Gênero
    </button>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Teologia</td>
                    <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="cadGenero" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Gênero</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/genero" method="POST">
                <label for="gen_nome" class="form-label">Nome do Gênero</label>
                <input type="text" class="form-control" id="gen_nome" name="gen_nome" required>

                <button type="submit" class="btn btn-success mt-2">Cadastrar Gênero</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
</div>