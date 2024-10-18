<?php $this->layout("master"); ?>

<!-- css -->
<link rel="stylesheet" href="/css/content.css">

<div class="d-flex justify-content-center mt-3">
    <h2>Gerênciar Encontros</h2>
</div>


<div class="m-3">
    
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
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href=""><ion-icon name="search" size="large"></ion-icon></a></td>
                    <td><a href="/editarMembro"><ion-icon name="create-outline" size="large"></ion-icon></a></td>
                    <td><a href="/excluirMembro"><ion-icon name="trash" size="large"></ion-icon></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>