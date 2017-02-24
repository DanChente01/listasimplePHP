<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista Simple</title>
  </head>
  <body>
    <h1>Listas Simples con PHP</h1>
    <?php
      include 'ListaSimple.php';
      $ListaTrabajadores = new ListaSimple();
      $Trabajador1 = new Nodo(01,"Daniel",20,15000);
      $Trabajador2 = new Nodo(02,"Robinson",19,20000);
      $Trabajador3 = new Nodo(03,"Ana",18,10000);
      $Trabajador4 = new Nodo(04,"Karen",18,13000);

      $ListaTrabajadores->AgregarNodoPrincipio($Trabajador1);
      $ListaTrabajadores->AgregarNodoPrincipio($Trabajador2);
      $ListaTrabajadores->AgregarNodoPrincipio($Trabajador3);
      $ListaTrabajadores->AgregarNodoPrincipio($Trabajador4);

      $mensaje = $ListaTrabajadores->VisualizarLista();
      echo "<br><br>".$mensaje;

      $buscar = $ListaTrabajadores->BuscarNodo("01");
      if ($buscar == true) {
          echo "<br><b>Buscar Nodo: </b>".$buscar->getCodigo().$buscar->getNombre();
      }else {
        echo "<br><b>Buscar Nodo:</b> Elemento no existe";
      }
      $eliminar = $ListaTrabajadores->EliminarNodo("02");
      if ($eliminar== true) {
        echo "<br><b>Eliminar: </b> Elemento eliminado";
      }else {
        echo "<br><b>Eliminar: </b> Elemento no existe";
      }
      $mensaje = $ListaTrabajadores->VisualizarLista();
      echo "<br><br>".$mensaje;
      echo "<br>";
      $promedio = $ListaTrabajadores->masQuePromedio();
      echo "Mas que el promedio: ".$promedio;
      echo "<br>";
      $suma = $ListaTrabajadores->sumaSalarios();
      echo "Suma Salarios:".$suma;
    ?>
  </body>
</html>
