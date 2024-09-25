<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


    <link rel="stylesheet" href="/css/estiloSidebar.css">

    <title>Clube da leitura</title>
</head>

<body>

    
    <nav>
		<ul>
			<li class="logo"><img alt="" src="/img/logonew.png"></li>
			<li>
				<a href="/membros"><i class="fa fa-home"></i> Membros</a>
			</li>
			<li>
				<a href="/livros"><i class="fa fa-book"></i> Livros</a>
			</li>
			<li>
				<a href="/encontros"><i class="fa fa-users"></i> Encontros</a>
			</li>
		</ul>
	</nav>
	<div class="wrapper">
		<div class="section">
			<div class="box-area">

				<?= $this->section("content") ?>

			</div>
		</div>
	</div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>