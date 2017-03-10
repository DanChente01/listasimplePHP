<?php
  include 'Nodo.php';

  class ListaSimple{
      private $PTR;
      private $Final;
      //construct
      function __construct(){
        $PTR = null;
        $Final = null;
      }
      //methods
      function AgregarNodoPrincipio($P){
        if ($this->PTR == null) {
          $this->Final = $P;
        }else {
          $P->setSig($this->PTR);
        }
        $this->PTR = $P;
      }

      function AgregarNodoFinal($p){
        if ($this->PTR == null) {
          $this->PTR = $P;
        }else {
          $Final->setSig($this->P);
        }
        $this->Final = $P;
      }
      function BuscarNodo($C){
        $P = $this->PTR;
        $Encontrado = false;
        while (($P != null)&&(!$Encontrado)) {
          if ($P->getCodigo() == $C) {
            $Encontrado = true;
          }else {
            $P = $P->getSig();
          }
        }
        return $P;
      }
      function EliminarNodo($C){
        $P = $this->PTR;
        $Ant = $P;
        $Encontrado = false;
        while (($P != null)&&(!$Encontrado)) {
          if ($P->getCodigo() == $C) {
            $Encontrado = true;
          }else {
            $Ant = $P;
            $P = $P->getSig();
          }
        }
        if ($P == null) {
          return false;
        }else {
          if ($P == $this->PTR) {
            $this->PTR = $this->PTR->getSig();
            if ($P == $this->Final) {
              $this->Final = null;
            }
          }else {
            $Ant->setSig($P->getSig());
            if ($P == $this->Final) {
              $this->Final = $Ant;
            }
          }
          $P = null;
          return true;
        }
      }
      function VisualizarLista(){
        $P = $this->PTR;
        $Mensaje = "";
        if ($P == null) {
          $Mensaje = "Lista Vacia";
        }else {
          while ($P != null) {
            $Mensaje = $Mensaje.$P->getCodigo()." ".$P->getNombre()." ".$P->getEdad()." ".$P->getSalario()."<br>";
            $P = $P->getSig();
          }
        }
        return $Mensaje;
      }
      function masQuePromedio(){
        $contador = 0;
        $sumatoria = 0;
        $promedio = 0;
        $P = $this->PTR;
        while ($P != null) {
          $sumatoria = $sumatoria += $P->getSalario();
          $contador++;
          $P = $P->getSig();
        }
        $promedio = $sumatoria/$contador;
        //echo "Promedio:".$promedio."<br>";
        $P = $this->PTR;
        $numeroTrabajadores = 0;
        $detalles = "";
        while ($P != null) {
          if ($P->getSalario()>$promedio) {
            $numeroTrabajadores ++;
            $detalles = $detalles.$P->getNombre()." ".$P->getSalario().", ";
          }
          $P = $P->getSig();
        }
        return $detalles;
      }
      function sumaSalarios(){
        $suma = 0;
        $mayor = 0;
        $menor = $this->PTR->getEdad();
        $P = $this->PTR;
        $detalles = "";
        if ($P == null) {
          return 0;
        }else {
          while ($P != null) {
            if ($P->getEdad()<$menor) {
              $menor = $P->getEdad();
            }
            if ($P->getEdad()>$mayor) {
              $mayor = $P->getEdad();
            }
            $P = $P->getSig();
          }
        }
        $P = $this->PTR;
        while ($P != null) {
          if (($P->getEdad()==$menor)||($P->getEdad()==$mayor)) {
            $suma += $P->getSalario();
            $detalles = $detalles.$P->getNombre()." ".$P->getEdad()." ".$P->getSalario().", ";
          }
          $P= $P->getSig();
        }
        return $suma."<br>".$detalles;
      }
  }
?>
