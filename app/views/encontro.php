<?php $this->layout("master"); ?>

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Encontros</h2>
</div>


<div class="m-3">
    <!-- gatilho do modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Cadastrar Encontro
    </button>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Livro Discutido</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08/10/2054</td>
                    <td>São Januário</td>
                    <td>O Manifesto Comunista</td>
                    <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Encontro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/membro" method="POST">
                <label for="liv_titulo" class="form-label">Data</label>
                <input type="text" class="form-control" id="liv_titulo" name="liv_titulo" required>

                <label for="liv_autor" class="form-label">Local</label>
                <input type="text" class="form-control" id="liv_autor" name="liv_autor" required>

                <label for="liv_genero" class="form-label">Livro Discutido</label>
                <input type="text" class="form-control" id="liv_genero" name="liv_genero" required>

                <label for="participante" class="form-label">Participantes</label>
                <select class="form-select" name="participante[]" id="participante">
                    <option value="">Participante 1</option>
                    <option value="">Participante 2</option>
                    <option value="">Participante 3</option>
                    <option value="">Participante 4</option>
                </select>

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