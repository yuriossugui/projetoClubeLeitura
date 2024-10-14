<?php $this->layout("master");?>



<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-4">
    <h2>Alterar Gênero</h2>
</div>

<div class="d-flex justify-content-center mt-5">
    <form action="/editarGenero" method="POST">
        
        <!-- hidden -->
        <input type="hidden" name="genero_id" value="<?php echo $genero[0]['genero_id'] ?>">

        <div class="card p-3" style="width:25vw;">
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="gen_nome" name="gen_nome" value="<?php echo $genero[0]['gen_nome'] ?>">
                <label for="gen_nome">Gênero</label>
            </div>
    
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>

    </form>
</div>