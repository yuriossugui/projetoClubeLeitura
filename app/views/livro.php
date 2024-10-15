<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Livros</h2>
</div>


<div class="m-3">

    <div class="d-flex justify-content-start mb-2">
        <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#cadLivro">
            Cadastrar Livro
        </button>
    </div>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Gênero</th>
                    <th>Número de páginas</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($livro as $l): ?>
                <tr>
                    <td><?= $l['liv_titulo'] ?></td>
                    <td><?= $l['liv_autor'] ?></td>
                    <td><?= $l['gen_nome'] ?></td>
                    <td><?= $l['liv_numero_paginas'] ?></td>
                    <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
              <?php endforeach ?>
            </tbody>
        </table>
    </div>
    
    
    <!-- cadastro de livro -->
    <div class="modal fade" id="cadLivro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Livro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/livro" method="POST">
                <label for="liv_titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="liv_titulo" name="liv_titulo" required>

                <label for="liv_autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="liv_autor" name="liv_autor" required>

                <label class="form-label" for="">Gênero</label>
                <select class="form-select" aria-label="" name="genero_id">
                  <option selected>Selecione uma opção</option>
                  <?php foreach($genero as $g): ?>
                    <option value="<?= $g['genero_id'] ?>"><?= $g['gen_nome'] ?></option>
                  <?php endforeach ?>
                </select>

                <label for="liv_numero_paginas" class="form-label">Número de páginas</label>
                <input type="number" class="form-control" id="liv_numero_paginas" name="liv_numero_paginas" required min="1">

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