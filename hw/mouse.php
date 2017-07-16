<?php
require_once 'ElectronicPart.php';
require_once 'IElectronicPart.php';

  class Mouse extends ElectronicPart implements IElectronicPart {
     private  $isWired;
  function __construct($manufacturer,$price,$model,$isWired){
    $this->isWired= $isWired;
    $this->manufacturer= $manufacturer;
    $this->price= $price;
    $this->model= $model;
     }
      function getSpecs(){
       
        return get_called_class().' manufacturer: '.$this->manufacturer.' model: '.$this->model.' price: '.$this->price;
 }
   }
 ?>