<?php
  class Nodo{
    private $Codigo;
    private $Nombre;
    private $Edad;
    private $Salario;
    private $Sig;
    //construct
    function __construct($Codigo, $Nombre, $Edad, $Salario){
      $this->Codigo = $Codigo;
      $this->Nombre = $Nombre;
      $this->Edad = $Edad;
      $this->Salario = $Salario;
    }
    //getters and setters
    function getCodigo(){
      return $this->Codigo;
    }
    function setCodigo($Codigo){
      $this->Codigo = $Codigo;
    }
    function getNombre(){
      return $this->Nombre;
    }
    function setNombre($Nombre){
      $this->Nombre = $Nombre;
    }
    function getEdad(){
      return $this->Edad;
    }
    function setEdad($Edad){
      $this->Edad = $Edad;
    }
    function getSalario(){
      return $this->Salario;
    }
    function setSalario($Salario){
      $this->Salario = $Salario;
    }
    function getSig(){
      return $this->Sig;
    }
    function setSig($I){
      $this->Sig = $I;
    }
  }
 ?>
