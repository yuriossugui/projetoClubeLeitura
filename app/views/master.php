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
    <?= $this->section("content") ?>

    
    <nav>
		<ul>
			<li class="logo"><img alt="" src="https://i.postimg.cc/WzkCM20g/logo1.png"></li>
			<li>
				<a href="#"><i class="fa fa-home"></i>   home</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-book"></i>   about</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-users"></i>   Team</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-picture-o"></i>   portfolio</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-phone"></i>   contact</a>
			</li>
		</ul>
	</nav>
	<div class="wrapper">
		<div class="section">
			<div class="box-area">
				<h2 style="color: #2b2626">Homepage</h2>
			</div>
		</div>
	</div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>