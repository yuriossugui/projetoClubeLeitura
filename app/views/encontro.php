<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Encontros</h2>
</div>


<div class="m-3">
    <!-- gatilho do modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#cadEncontro">
      Cadastrar Encontro
    </button>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Livro Discutido</th>
                    <th>Detalhes</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>08/10/2054</td>
                    <td>São Januário</td>
                    <td>O Manifesto Comunista</td>
                    <td><a href=""><ion-icon name="search" size="large"></ion-icon></a></td>
                    <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <!-- Modal -->
    <div class="modal fade" id="cadEncontro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Encontro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/encontros" method="POST">
                <label for="enc_data" class="form-label">Data</label>
                <input type="text" class="form-control" id="enc_data" name="enc_data" required>

                <label for="enc_local" class="form-label">Local</label>
                <input type="text" class="form-control" id="enc_local" name="enc_local" required>

                <label for="liv_titulo" class="form-label">Livro Discutido</label>
                <select class="form-select" name="liv_titulo" id="">
                    <option value="" default>Selecione uma opção</option>
                    <option value="">Livro 1</option>
                    <option value="">Livro 2</option>
                    <option value="">Livro 3</option>
                    <option value="">Livro 4</option>
                </select>

                <label for="mem_nome" class="form-label">Participantes</label>
                <select class="form-select" name="mem_nome" id="mem_nome">
                    <option value="" default>Selecione uma opção</option>
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