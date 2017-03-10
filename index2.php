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
      <input type="text" name="agregarInicioCodigo">
      <input type="text" name="agregarInicioNombre">
      <input type="text" name="agregarInicioEdad">
      <input type="text" name="agregarInicioSalario">
      <input type="submit" value="Agregar Inicio">
    </form>
    <br>
    <form action="index2.php" method="post">
      Agregar Final
      <input type="text" name="agregarFinalCodigo">
      <input type="text" name="agregarFinalNombre">
      <input type="text" name="agregarFinalEdad">
      <input type="text" name="agregarFinalSalario">
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
      if (isset($_POST["agregarInicioCodigo"],$_POST["agregarInicioNombre"],
                $_POST["agregarInicioEdad"],$_POST["agregarInicioSalario"])) {
        $n = new Nodo($_POST["agregarInicioCodigo"],$_POST["agregarInicioNombre"],
                  $_POST["agregarInicioEdad"],$_POST["agregarInicioSalario"]);
        $_SESSION['lista']->AgregarNodoPrincipio($n);
      }

      if (isset($_POST["agregarFinalCodigo"],$_POST["agregarFinalNombre"],
                $_POST["agregarFinalEdad"],$_POST["agregarFinalSalario"])) {
        $n = new Nodo($_POST["agregarFinalCodigo"],$_POST["agregarFinalNombre"],
                  $_POST["agregarFinalEdad"],$_POST["agregarFinalSalario"]);
        $_SESSION['lista']->AgregarNodoFinal($n);
      }

      if (isset($_POST["buscar"])) {
        $b = $_SESSION['lista']->BuscarNodo($_POST["buscar"]);
        if ($b == true) {
          echo "<br>El elemento encontrado es: ".$b->getCodigo()." ".$b->getNombre();
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

      $lista = $_SESSION['lista']->VisualizarLista();
      if ($lista == "Lista Vacia") {
        echo "<br>No hacer nada";
      }else {
          echo "<br><hr><b>Mas que el promedio</b>";
          echo "<br>".$_SESSION['lista']->masQuePromedio();
          echo "<br><hr><b> Suma salario mayor y menor edad</b>";
          echo "<br>".$_SESSION['lista']->sumaSalarios();
      }
      //Visualizar
      echo "<br><hr>".$_SESSION['lista']->VisualizarLista();
     ?>

  </body>
</html>
