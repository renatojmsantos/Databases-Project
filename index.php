

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>BD 2019/20</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
	<!-- BOOTSTRAP -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link href ="navbar.css" rel = "stylesheet" type = "text/css">

	<!-- MENU -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e9e9e9;">
	  <a class="navbar-brand" href="index.php">BD 2019/20</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">

	      <li class="nav-item dropdown">
	      	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Procurar
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="browseT.php">Procurar torneio</a>
	          <a class="dropdown-item" href="browseTeam.php">Procurar equipa</a>
	        </div>
	      </li>

	      <?php session_start(); if (isset($_SESSION['logged'])) : ?>
	       <li class="nav-item">
	        <a class="nav-link" href="myteams.php">Minhas equipas</a>
	      </li>
	       <?php endif; ?>

	      <?php session_start(); if (isset($_SESSION['logged'])) : ?>
	       <li class="nav-item">
	        <a class="nav-link" href="mytournaments.php">Meus torneios</a>
	      </li>

 			<?php endif; ?>
	      <?php session_start(); if (isset($_SESSION['logged'])) : ?>
	       <li class="nav-item">
	        <a class="nav-link" href="#">Mensagens</a>
	      </li>
	       <?php endif; ?>

	    </ul>
	    <!--
	    <form class="form-inline my-2 my-lg-0">
	        <a class="nav-link" href="register.php">Registar</a>
	        <a class="nav-link" href="login.php">Login</a>
	    </form> -->


	    <?php session_start(); if (isset($_SESSION['logged'])) : ?>
		    <li class="form-inline mx-4 my-lg-0 nav-item dropdown" >
		  	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		      <?php echo $_SESSION['user_login']; ?>
		    </a>
		    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		      <a class="dropdown-item" href="user_account.php">User account</a>
		      <a class="dropdown-item" href="logout.php">Logout</a>
		    </div>
	      	</li>

		<?php else: ?>
	      	<div class="form-inline my-2 my-lg-0">
			    <form action="logging_to_account.php" method="post">
			      <input type="text" name="input_user_login" placeholder="Username">
			      <input type="password" name="input_user_password" placeholder="Password">
			      <button type="submit" value="Log in" >Login</button>
			      <?php
			    if(isset($_SESSION['error_log']))
				{
					echo '</br>';
					echo $_SESSION['error_log'];
					unset($_SESSION['error_log']);
				}
				?>

			    </form>
			    <form action="register.php">
			      <button type="submit">Register</button>
			    </form>
		  	</div>


	    <?php endif; ?>

	  </div>
	</nav>
  </form>

<style> 
	.instrucoes{
		background-color: gray;
		color: black;
		text-align: center;
		position: absolute; 
		width: 1349px;  
		height: 600px; 
		z-index: 2; 
		left: 40px;
		right: 40px;
		top: 100px;
		margin: 0 auto;
		background-color:rgba(255,255,255,.4);/* modern browser */
		-ms-filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#66FFFFFF,endColorstr=#66FFFFFF);/*IE fix */
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#66FFFFFF,endColorstr=#66FFFFFF);     /* IE Fix */
	}


	/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
	@media screen and (max-width: 800px) {
	  .instrucoes {
	    font-size: 15px;
	    width: 600px;  
		height: 300px; 
		z-index: 2; 
		left: 20px;
		right: 20px;
		top: 100px;
	  }
	}
</style>
</head>

	<body>
		<div class="instrucoes">
			<br><h2>Instruções</h2>
			<br>
			<b>Inscrever na plataforma</b>
			<br>Tem de se registar para ser possivel recolher os seus dados.
			<br><br>
			<b>Começar a jogar</b>
			<br>Deve encontrar uma equipa com uma vaga disponível.
			<br>Candidate-se à equipa.
			<br>Assim que o capitão o aceitar, passa a fazer parte da equipa escolhida.
			<br>
		</div>
	</body>
</html>


