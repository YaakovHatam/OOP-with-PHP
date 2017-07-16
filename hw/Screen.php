<?php
require_once 'ElectronicPart.php';
require_once 'IElectronicPart.php';

 class Screen  extends ElectronicPart implements IElectronicPart {
   private    $size;
   private   $panel;
    function __construct($manufacturer,$price,$model,$size,$panel){
    $this->size= $size;
    $this->panel= $panel;
    $this->manufacturer= $manufacturer;
    $this->price= $price;
    $this->model= $model;
    }
     function getSpecs(){
       
       return get_called_class().' manufacturer: '.$this->manufacturer.' model: '.$this->model.' price: '.$this->price;
 }
  
 }
 ?>