<?php
  class Nodo{
    private $Info;
    private $Sig;
    //construct
    function __construct($Info){
      $this->Info = $Info;
    }
    //getters and setters
    function getInfo(){
      return $this->Info;
    }
    function setInfo($Info){
      $this->Info = $Info;
    }
    function getSig(){
      return $this->Sig;
    }
    function setSig($I){
      $this->Sig = $I;
    }
  }
 ?>
