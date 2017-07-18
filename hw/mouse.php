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

       $statement = $pdo->prepare("INSERT INTO l40_mouses(manufacturer,model, price,is_wired)
    VALUES(:manu, :mod, :pri,:iswi)");
$statement->execute(array(
     "manu" =>$this->manufacturer,
    "mod" => $this->model,
    "pri" => $this->price,
    "iswi" => $this->isWired,
)); 
   
 }
   }
 ?>