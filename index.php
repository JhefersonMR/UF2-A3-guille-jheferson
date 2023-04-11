<?php
session_start();
$_SESSION["current_page"] = "bienvenida";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido a Acertijos</title>
	<link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
	<style>
		body {
			font-family: 'Minecraftia', sans-serif;
			background-image: url(https://preview.redd.it/rk2ly8cspmb51.jpg?width=1920&format=pjpg&auto=webp&s=91400a0976b41c42daf966a9526251fca4328ea2);
			background-repeat: repeat;
			color: #ffffff;
			text-shadow: 1px 1px #000000;
			background-size: cover;
  			flex-direction: column;
  			position: absolute;
  			top: 50%;
  			left: 50%;
 			transform: translate(-50%, -50%);

		}
		h1 {
			font-size: 48px;
			text-align: center;
			margin-top: 230px;
			color: #ffdb00;
			text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);		
		}
		p {
			font-size: 24px;
			text-align: center;
			margin-top: 20px;
			color: #ffffff;
			text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);
		}
		a {
			
			display: block;
			width: 100%;
			padding: .5rem 0;
			border: 2px solid rgba(0, 0, 0, 1);
			text-align: center;
			text-decoration: none;
			font-size: 1rem;
			color: rgb(247, 247, 247);
			background-color: #0072e3;
			box-shadow: inset 3px 3px 0 rgba(255, 255, 255, 0.5),
              inset -3px -3px 0 rgba(0, 0, 0, 0.5);
			text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);
			background: #727272;
			letter-spacing: .025em;
			cursor: pointer;
			margin-top: 40px;
			
		}
		a:hover {
			background: rgba(115, 107, 221, 1);
			color: rgb(246, 246, 44);
			outline: none;	
		}
	</style>
</head>
<body>
<h1>¡Bienvenido al minijuego de Minecraft!</h1>
<p>En este sitio encontrarás una serie de preguntas sobre Minecraft. ¿Estás listo?</p>
<a href="pregunta1.php">Comenzar</a>
</body>
</html>

