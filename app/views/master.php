<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (optional) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- css da sidebar -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- chartjs -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <style>
  </style>

</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Clube da leitura</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link" href="/membros" role="button" aria-expanded="false">
            Membros
          </a>
        </li>

         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/genero">Gerenciar Gênero</a></li>
            <li><a class="dropdown-item" href="/livros">Gerenciar Livro</a></li>
        </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="/encontros" role="button" aria-expanded="false">
            Encontros
          </a>
        </li>

      </ul>

      <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seja bem vindo(a) Usuário
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="editar_usuario.php">Editar dados</a></li>
                    <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                </ul>
            </li>
        </ul>
    </div>
  </div>
</nav>

    <?= $this->section("content")?>

  <!-- ion icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
