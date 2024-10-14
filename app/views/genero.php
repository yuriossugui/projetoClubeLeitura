<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">
<!-- js -->
<script src="/js/genero.js"></script>

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Gênero</h2>
</div>


<div class="m-3">
  <div class="d-flex justify-content-between mb-2">
    <!-- gatilho do modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadGenero">
      Cadastrar Gênero
    </button>
    <?php if(isset($msg)): ?>
      <div class="card p-2 msg">
          <?php echo $msg ?>
      </div>
    <?php endif ?>
  </div>

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
              <?php foreach($genero as $g): ?>
                <tr>
                    <td><?php echo $g['gen_nome'] ?></td>
                    <td><a href="/editarGenero?genero_id=<?= $g['genero_id'] ?>"><button class="edit btn"><ion-icon name="create-outline" size="large"></ion-icon></button></a></td>
                    <td><button class="trash btn btnExcluir" data-id="<?php echo $g['genero_id']; ?>"><ion-icon name="trash" size="large"></ion-icon></button></td>
                    </tr>
              <?php endforeach ?>
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
            <form action="/genero" id="cadGeneroForm" method="POST">
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