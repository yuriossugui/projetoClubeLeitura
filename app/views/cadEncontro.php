<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">
<!-- js -->
 <script src="/js/cadEncontro.js"></script>

<div class="card m-3 p-2">
    
    <div class="d-flex justify-content-center mb-5">
        <h2>Agendar Encontros</h2>
    </div>

    <form action="/cadEncontroMembros" method="GET" id="cadEncontro">
        
        <div class="row align-items-center mb-2">
            
            <div class="col">
                <label for="enc_data" class="form-label">Dia e Hora do Encontro</label>
                <input type="datetime-local" class="form-control datetime" name="enc_data" id="enc_data" required> 
            </div>

            <div class="col">
                <label for="enc_local" class="form-label">Local do Encontro</label>
                <input type="text" class="form-control" name="enc_local" id="enc_local" required>
            </div>

            <div class="col">
                <label for="livro_id" class="form-label">Livro Discutido</label>
                <select name="livro_id" id="livro_id" class="form-select" required>
                    <option value="" selected>Selecione uma opção</option>
                    <?php foreach($livro as $l): ?>
                        <option value="<?= $l['livro_id'] ?>"><?= $l['liv_titulo'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>

        </div>
            
        <div class="row align-items-center mb-2">
            <div class="col">
                <label for="qtdMembro" class="form-label">Quantidade de Participantes</label>
                <input type="number" class="form-control" name="qtdMembro" id="qtdMembro" style="width:300px;" required>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Agendar</button>
        </div>
    </form>


</div>