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
function insert(){
      $host = '127.0.0.1';
      $db   = 'northwind';
      $user = 'root';
      $pass = '';
      $charset = 'utf8';
      $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
      $opt = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      $pdo = new PDO($dsn, $user, $pass, $opt);

            $statement = $pdo->prepare("INSERT INTO l40_screens(manufacturer,model, price,size)
          VALUES(:manu,:mod,:pri,:siz)");
      $statement->execute(array(
          "manu" =>  $this->manufacturer,
          "mod"  =>  $this->model,
          "pri"  =>  $this->price,
          "siz"  =>  $this->size
    
     )); 
    }
 }
 ?>
