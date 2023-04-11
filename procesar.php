<?php
session_start();

if ($_SESSION["current_page"] == 1) {
  //pregunta 1
  $respuesta1 = $_POST["respuesta1"];
  if ($respuesta1 == "nether") {
    $_SESSION["respuesta1"] = $respuesta1;
    header("Location: pregunta2.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: index.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 2) {
  //pregunta 2
  $respuesta2 = $_POST["respuesta2"];
  if ($respuesta2 == "notch") {
    $_SESSION["respuesta2"] = $respuesta2;
    header("Location: pregunta3.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: pregunta2.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 3) {
  //pregunta 3
  $respuesta3 = $_POST["respuesta3"];
  if ($respuesta3 == "creeper") {
    $_SESSION["respuesta3"] = $respuesta3;
    header("Location: pregunta4.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: pregunta3.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 4) {
  //pregunta 4
  $respuesta4 = $_POST["respuesta4"];
  if ($respuesta4 == "si") {
    $_SESSION["respuesta4"] = $respuesta4;
    header("Location: pregunta5.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: pregunta4.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 5) {
  //pregunta 5
  $respuesta5 = $_POST["respuesta5"];
  if ($respuesta5 == "si") {
    $_SESSION["respuesta5"] = $respuesta5;
    header("Location: pregunta6.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: pregunta5.php");
    exit();
  }
} elseif ($_SESSION["current_page"] == 6) {
  //pregunta 6
  $respuesta6 = $_POST["respuesta6"];
  if ($respuesta6 == "3") {
    $_SESSION["respuesta6"] = $respuesta6;
    header("Location: resultado.php");
    exit();
  } else {
    //error
    $_SESSION["error"] = "Respuesta es incorrecta";
    header("Location: pregunta6.php");
    exit();
  }
}
?>
