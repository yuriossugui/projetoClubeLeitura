<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        try{

        }catch(Exception $e){
            $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="icon" href="/img/favicon3.png" type="image/png">


    <title>Clube da Leitura</title>
</head>
<body>
    <div class="d-flex justify-content-center" style="margin-top:20vh;">
        <div class="card p-3" style="width:25vw;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <form action="" method="POST">
                <h3 class="text-center" style="font-family: 'Pacifico', cursive; color:#4287f5">Clube da Leitura</h3>
                <br>
                <input type="text" class="form-control" placeholder="Usuário" required>
                <br>
                <input type="text" class="form-control" placeholder="E-mail" required>
                <br>
                <input type="password" class="form-control" placeholder="Senha" required>
                <br>
                <label for="recuperar_senha" style="font-weight: lighter;">Esqueceu a senha ?</label>
                <input type="radio" value="">

                <br>

                <button type="submit" class="btn btn-success mt-2">Entrar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>