<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">
<!-- js -->
<script src="/js/editarLivro.js"></script>

<div class="d-flex justify-content-center mt-4">
    <h2>Alterar Livro</h2>
</div>

<div class="d-flex justify-content-center mt-5">
    <form action="/editarLivro" method="POST">
        
        <!-- hidden -->
        <input type="hidden" name="livro_id" value="<?= $livro[0]['livro_id'] ?>">
        <input type="hidden" name="genero_id" value="<?= $livro[0]['genero_id'] ?>">

        <div class="card p-3" style="width:25vw;">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="liv_titulo" name="liv_titulo" value="<?= $livro[0]['liv_titulo'] ?>">
                <label for="liv_titulo">Título</label>
            </div>
    
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="liv_autor" name="liv_autor" value="<?= $livro[0]['liv_autor'] ?>">
                <label for="liv_autor">Autor</label>
            </div>
    
            <div class="form-floating mb-2">
                <input type="number" class="form-control" id="liv_numero_paginas" name="liv_numero_paginas" value="<?= $livro[0]['liv_numero_paginas'] ?>">
                <label for="liv_numero_paginas">Número de páginas</label>
            </div>

            <div class="form-floating mb-2">
                <select class="form-select mb-2" name="genero_id" id="genero_id">
                    <option value="<?= $livro[0]['genero_id'] ?>" selected><?= $livro[0]['gen_nome'] ?></option>
                    <?php foreach($genero as $g): ?>
                        <option value="<?= $g['genero_id'] ?>"><?= $g['gen_nome'] ?></option>
                    <?php endforeach ?>
                </select>
                <label for="gen_nome">Gênero</label>
            </div>
    
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>

    </form>
</div>
