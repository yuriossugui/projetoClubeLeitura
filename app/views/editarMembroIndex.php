<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-4">
    <h2>Alterar Membro</h2>
</div>

<div class="d-flex justify-content-center mt-5">
    <form action="/editarMembro" method="POST">
        
        <!-- hidden -->
        <input type="hidden" name="membro_id" value="<?php echo $membro[0]['membro_id'] ?>">

        <div class="card p-3" style="width:25vw;">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="mem_nome" name="mem_nome" value="<?php echo $membro[0]['mem_nome'] ?>">
                <label for="mem_nome">Usuário</label>
            </div>
    
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="mem_contato" name="mem_contato" value="<?php echo $membro[0]['mem_contato'] ?>">
                <label for="mem_nome">Contato</label>
            </div>
    
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="mem_livro_favorito" name="mem_livro_favorito" value="<?php echo $membro[0]['mem_livro_favorito'] ?>">
                <label for="mem_livro_favorito">Livro Favorito</label>
            </div>
    
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>

    </form>
</div>
