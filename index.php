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
      $nuevaLista = new ListaSimple();
      $elemento0 = new Nodo("1");
      $elemento1 = new Nodo("A");
      $elemento2 = new Nodo("B");
      $elemento3 = new Nodo("C");

      $nuevaLista->AgregarNodoPrincipio($elemento0);
      $nuevaLista->AgregarNodoPrincipio($elemento1);
      $nuevaLista->AgregarNodoPrincipio($elemento2);
      $nuevaLista->AgregarNodoPrincipio($elemento3);

      $mensaje = $nuevaLista->VisualizarLista();
      echo "<br><br>".$mensaje;
      $buscar = $nuevaLista->BuscarNodo("o");
      if ($buscar == true) {
          echo "<br><b>Buscar Nodo: </b>".$buscar->getInfo();
      }else {
        echo "<br><b>Buscar Nodo:</b> Elemento no existe";
      }
      $eliminar = $nuevaLista->EliminarNodo("A");
      if ($eliminar== true) {
        echo "<br><b>Eliminar: </b> Elemento eliminado";
      }else {
        echo "<br><b>Eliminar: </b> Elemento no existe";
      }
      $mensaje = $nuevaLista->VisualizarLista();
      echo "<br><br>".$mensaje;
     ?>
  </body>
</html>
