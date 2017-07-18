<?php
require_once 'ElectronicPart.php';
require_once 'IElectronicPart.php';

 class Computer extends ElectronicPart implements IElectronicPart {
   private   $motherboard;
   private   $processor;
   private   $hardDrive;
   private   $ram;
   private   $graphicCard;

function __construct($manufacturer,$price,$model,$motherboard,
    $processor,$hardDrive,$ram,$graphicCard){
    
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
       
   return get_called_class().' manufacturer: '.$this->manufacturer.
   ' model: '.$this->model.' price: '.$this->price;

 }
  public function insert(){
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

       $statement = $pdo->prepare("INSERT INTO l40_computers (manufacturer,price,model,motherboard,ram,graphic_card)
    VALUES(:manu, :pri, :mod,:mothe,:ra,:gragh)");
$statement->execute(array(
    "manu" =>$this->manufacturer,
    "mod" => $this->model,
    "pri" => $this->price,
    "mothe"=> $this->motherboard,
   "gragh"=> $this->graphicCard,
    "ra" =>  $this->ram
    )); 

  }






  }
?>
 