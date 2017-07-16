<?php
require_once 'ElectronicPart.php';
require_once 'IElectronicPart.php';

 class Computer extends ElectronicPart implements IElectronicPart {
   private   $motherboard;
   private   $processor;
   private   $hardDrive;
   private   $ram;
   private   $graphicCard;
    function __construct($manufacturer,$price,$model,$motherboard,$processor,$hardDrive,$ram,$graphicCard){
    
    $this->motherboard = $motherboard;
    $this->processor = $processor;
    $this->hardDrive = $hardDrive;
    $this->ram = $ram;
    $this->graphicCard = $graphicCard;
    $this->manufacturer= $manufacturer;
    $this->price= $price;
    $this->model= $model;
 }
  function getSpecs(){
       
   return get_called_class().' manufacturer: '.$this->manufacturer.' model: '.$this->model.' price: '.$this->price;

 }
  }
 ?>
 