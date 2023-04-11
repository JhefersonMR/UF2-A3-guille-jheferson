<?php
session_start();

//comprobar respuestas
if (isset($_SESSION["respuesta1"]) && isset($_SESSION["respuesta2"]) && isset($_SESSION["respuesta3"]) && isset($_SESSION["respuesta4"]) && isset($_SESSION["respuesta5"]) && isset($_SESSION["respuesta6"])) 
{
  //mostrar resultados
  $respuesta1 = $_SESSION["respuesta1"];
  $respuesta2 = $_SESSION["respuesta2"];
  $respuesta3 = $_SESSION["respuesta3"];
  $respuesta4 = $_SESSION["respuesta4"];
  $respuesta5 = $_SESSION["respuesta5"];
  $respuesta6 = $_SESSION["respuesta6"];
} else {
  header("Location: index.php");
  exit();
}

unset($_SESSION["current_page"]);
unset($_SESSION["respuesta1"]);
unset($_SESSION["respuesta2"]);
unset($_SESSION["respuesta3"]);
unset($_SESSION["respuesta4"]);
unset($_SESSION["respuesta5"]);
unset($_SESSION["respuesta6"]);
unset($_SESSION["error"]);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Resultados del Test</title>
    <link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
    <style>
      body {
      font-family: 'Minecraftia', sans-serif;
      background-color: #f5f5f5;
      margin-top: 20px;
      background-image: url(https://media.tenor.com/uC8PsIoOp6wAAAAC/flying-ender-dragon.gif);
      background-size: cover;
      flex-direction: column;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
      /* Estilos para el título */
      h1 {
        font-size: 48px;
			  text-align: center;
			  color: #ffdb00;
			  text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);
      }

      /* Estilos para las preguntas y respuestas */
      p {
        font-size: 18px;
        margin-bottom: 10px;
        color: white;
        text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);
      }

      /* Estilos para el contenedor principal */
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        
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
		}

		a:hover {
			background: rgba(115, 107, 221, 1);
			color: rgb(246, 246, 44);
			outline: none;
		}
    </style>
  </head>
  <body>
    <div class="container">
      <h1>¡Enhorabuena!</h1>
      <p>Respuestas de las preguntas</p>
      <p>Pregunta 1: <?php echo $respuesta1; ?></p>
      <p>Pregunta 2: <?php echo $respuesta2; ?></p>
      <p>Pregunta 3: <?php echo $respuesta3; ?></p>
      <p>Pregunta 4: <?php echo $respuesta4; ?></p>
      <p>Pregunta 5: <?php echo $respuesta5; ?></p>
      <p>Pregunta 6: <?php echo $respuesta6; ?></p>
    </div>
    </form>
    <a href="index.php">Volver al menú principal</a>
    </form>
  </body>
</html>