<?php
class Purchase{
     private $screen;
     private $mouse;
     private $keyboard;
     private $computer;
      function __construct($screen,$mouse,$keyboard,$computer){
    
       $this->screen= $screen;
       $this->mouse= $mouse;
       $this->keyboard= $keyboard;
       $this->computer= $computer;
      }
      
       

     function getFullPurchaseDetails()
     {
            
       return $this->screen->getSpecs().'<br>'.$this->mouse->getSpecs().'<br>'.$this->keyboard->getSpecs().'<br>'.$this->computer->getSpecs().'<br><br>';
     }
 }

?>