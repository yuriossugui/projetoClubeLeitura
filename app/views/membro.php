<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Membros</h2>
</div>


<div class="m-3">
    <!-- gatilho do modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Cadastrar Membro
    </button>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center" style="background-color:white">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Contato</th>
                    <th>Livros Favoritos</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($membro as $m): ?>
                <tr> 
                  <td><?php echo $m['mem_nome']; ?></td>
                  <td><?php echo $m['mem_contato']; ?></td>
                  <td><?php echo $m['mem_livro_favorito']; ?></td>
                  <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                  <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
              <?php endforeach ?>  
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Membro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="/membro" method="POST">
                <label for="mem_nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="mem_nome" name="mem_nome" required>

                <label for="mem_contato" class="form-label">Contato</label>
                <input type="text" class="form-control" id="mem_contato" name="mem_contato" required>

                <label for="mem_livro_favorito" class="form-label">Livro Favorito</label>
                <input type="text" class="form-control" id="mem_livro_favorito" name="mem_livro_favorito" required>

                <button type="submit" class="btn btn-success mt-2">Cadastrar Membro</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
</div>