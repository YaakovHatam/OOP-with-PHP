<?php
class ElectronicPart{
private $manufacturer;
private $price;
private $model;
 
 
 function getSpecs(){
       
       return get_called_class().(string)$this->manufacturer.(string)$this->model.(string)$this->price;

 }
 }
 ?>