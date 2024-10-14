<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Usuários</h2>
</div>


<div class="m-3">

    <div class="d-flex justify-content-start mb-2">
        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#cadUsuario">
            Cadastrar Usuário
        </button>
    </div>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="/editarUsuario"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirUsuario"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <!-- cadastro de usuario -->
    <div class="modal fade" id="cadUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Usuário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/usuario" method="POST">
                <label for="liv_titulo" class="form-label">Login</label>
                <input type="text" class="form-control" id="liv_titulo" name="liv_titulo" required>

                <label for="liv_autor" class="form-label">Senha</label>
                <input type="text" class="form-control" id="liv_autor" name="liv_autor" required>

                <label for="liv_genero" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="liv_genero" name="liv_genero" required>

                <button type="submit" class="btn btn-success mt-2">Cadastrar Livro</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>

</div>