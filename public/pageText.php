<?php
use Dsw\T3\Text;
require '../vendor/autoload.php';
require_once '../src/Text.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Pruebas con la clase Text</h1>
  <?php
    $instance1 = new Text("Encabezado 1", 1);
    $instance2 = new Text("Encabezado 2", 2);
    $instance3 = new Text("Encabezado 3", 3);
    $instance4 = new Text("Parrafo", 7);
  ?>

  <?=$instance1->render()?>
  <?=$instance2->render()?>
  <?=$instance3->render()?>
  <?=$instance4->render()?>
</body>
</html>