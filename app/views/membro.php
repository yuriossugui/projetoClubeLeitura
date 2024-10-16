<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">
<!-- js -->
<script src="/js/membro.js"></script>

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Membros</h2>
</div>


<div class="m-3">
    
    <div class="d-flex justify-content-between mb-2">
      <!-- gatilho do modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar Membro
      </button>

      <?php if(isset($msg)): ?>
        <div class="card msg">
          <?php echo $msg ?>
        </div>
      <?php endif ?>
    </div>
    
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-hover text-center" style="background-color:white">
            <thead>
                <tr>
                    <th>Usuário</th>
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
                  <td><a href="/editarMembro?membro_id=<?php echo $m['membro_id']?>"><button class="edit btn"><ion-icon name="create-outline" size="large"></ion-icon></button></a></td>
                  <td><button class="trash btn btnExcluir" data-id="<?php echo $m['membro_id']; ?>"><ion-icon name="trash" size="large"></ion-icon></button></td>
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
            <form action="/membro" method="POST" id="cadMembro">
                <label for="mem_nome" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="mem_nome" name="mem_nome" id="mem_nome" required>

                <label for="mem_contato" class="form-label">Contato</label>
                <input type="text" class="form-control" id="mem_contato" name="mem_contato" id="mem_contato" required>

                <label for="mem_livro_favorito" class="form-label">Livro Favorito</label>
                <input type="text" class="form-control" id="mem_livro_favorito" name="mem_livro_favorito" id="mem_livro_favorito" required>

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