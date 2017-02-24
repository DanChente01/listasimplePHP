<?php
  include 'ListaSimple.php';

  session_start();
  if (!isset($_SESSION["lista"])) {
    $_SESSION["lista"]= new ListaSimple();
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listas Simples Interfaz</title>
  </head>
  <body>
    <h1>Listas Simples Intefaz</h1>
    <form action="index2.php" method="post">
      Agregar Inicio
      <input type="text" name="agregarInicio">
      <input type="submit" value="Agregar Inicio">
    </form>
    <br>
    <form action="index2.php" method="post">
      Agregar Final
      <input type="text" name="agregarFinal">
      <input type="submit" value="Agregar Final">
    </form>
    <br>
    <form action="index2.php" method="post">
      Buscar
      <input type="text" name="buscar">
      <input type="submit" value="Buscar">
    </form>
    <br>
    <form action="index2.php" method="post">
      Eliminar
      <input type="text" name="eliminar">
      <input type="submit" value="Eliminar">
    </form>

    <?php
      if (isset($_POST["agregarInicio"])) {
        $n = new Nodo($_POST["agregarInicio"]);
        $_SESSION['lista']->AgregarNodoPrincipio($n);
      }

      if (isset($_POST["agregarFinal"])) {
        $n = new Nodo($_POST["agregarFinal"]);
        $_SESSION['lista']->AgregarNodoFinal($n);
      }

      if (isset($_POST["buscar"])) {
        $b = $_SESSION['lista']->BuscarNodo($_POST["buscar"]);
        if ($b == true) {
          echo "<br>El elemento encontrado es: ".$b->getInfo();
        }else {
          echo "<br>Elemento no encontrado";
        }
      }

      if (isset($_POST["eliminar"])) {
        $b = $_SESSION['lista']->EliminarNodo($_POST["eliminar"]);
        if ($b != null) {
          echo "<br>El elemento ha sido eliminado: ";
        }else {
          echo "<br>Elemento no eliminado";
        }
      }
      //Visualizar
      echo "<br><hr>".$_SESSION['lista']->VisualizarLista();
     ?>

  </body>
</html>
