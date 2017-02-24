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
          if ($P->getInfo() == $C) {
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
          if ($P->getInfo() == $C) {
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
            if ($P == $Final) {
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
            $Mensaje = $Mensaje.$P->getInfo().", ";
            $P = $P->getSig();
          }
        }
        return $Mensaje;
      }
  }
?>
