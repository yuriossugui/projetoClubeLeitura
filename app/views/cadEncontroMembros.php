<?php $this->layout("master"); ?>

<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-2">
    <h2>Selecione os <?=$_GET['qtdMembro']?> Membro(s)</h2>
</div>

<form action="">
    <div class="card m-2 p-2">
        <?php for($i = 0; $i < $_GET['qtdMembro']; $i++): ?>
            <select class="form-select mb-2" name="membro_id[]" id="membro_id[]">
            <option value="">Selecione o(s) Membros(s) </option>
            <?php foreach($membro as $m): ?>
                <option  value="<?= $m['membro_id'] ?>"><?= $m['mem_nome'] ?></option>
            <?php endforeach ?>
            </select>
        <?php endfor ?>
        <div class="d-flex justify-content-center">
            <button class="btn btn-success" type="submit">Agendar</button>
        </div>
    </div>
</form>
