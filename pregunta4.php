<?php
session_start();
$_SESSION["current_page"] = 4;

if (!isset($_SESSION["respuesta1"]) || $_SESSION["respuesta1"] != "nether" ||
    !isset($_SESSION["respuesta2"]) || $_SESSION["respuesta2"] != "notch" ||
    !isset($_SESSION["respuesta3"]) || $_SESSION["respuesta3"] != "creeper") {
  header("Location: pregunta3.php");
  exit();
}

if (isset($_SESSION["respuesta4"]) && $_SESSION["respuesta4"] == "si") {
  header("Location: pregunta5.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pregunta 2</title>
  <link href="http://fonts.cdnfonts.com/css/minecraftia" rel="stylesheet">
  <style>
    body {
      font-family: 'Minecraftia', sans-serif;
      margin-top: 220px;
      background-image: url("https://i.pinimg.com/originals/02/a3/09/02a3098f242e38c1b8e76c37bbd3c5d6.gif");
      background-size: cover;
    }

    form {
      background-image: url(https://www.desktopbackground.org/t/2015/06/27/970580_image-wiki-backgrounds-minecraft-wiki-wikia_1360x768_h.png);
      padding: 20px;
      border: 1px solid white;
      margin: 20px auto;
      max-width: 500px;
      background-size: cover;
    }

    p {
      font-size: 18px;
      margin-bottom: 10px;
      color: white;
      text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.8);
    }

    input[type=text] {
      font-family: 'Minecraftia', sans-serif;
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid white;
      background-color: black;
      font-size: 16px;
      color: white;
    }

    input[type=submit] {
      font-family: 'Minecraftia', sans-serif;
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
			margin-top: 10px;
    }

    input[type=submit]:hover {
      background: rgba(115, 107, 221, 1);
      color: rgb(246, 246, 44);
			outline: none;
    }
  </style>
</head>
<body>

<form method="post" action="procesar.php">
  <p>Pregunta 4: ¿Puedes tener mascotas en Minecraft?</p>
  <input type="text" name="respuesta4">
  <input type="submit" value="Enviar respuesta">
</form>
</body>
</html>