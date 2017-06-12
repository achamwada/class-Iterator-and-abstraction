<?php
abstract class Person {
    public $name;
    public $age;
    public $surname;
    protected $profile;
    private $talent;
    
 public function __construct($n, $a, $s, $p, $t){
     $this->name=$n;
     $this->age=$a;
     $this->surname=$s;
     $this->profile=$p;
     $this->talent=$t;
 }
 
 public Final function Iterateclass(){
     foreach($this as $key=>$va){
         
         if($key=="eventname"){
             echo "------------------------------|\n";
             echo "Name of Event is ".$va;
             echo "\n------------------------------|";
         }else{
             echo "\n $va***";
         }
         
     }
   
      echo "\n------------------------------|\n";
      echo "Name of Event is ".$this->eventname;;
      echo "\n------------------------------|";
 }
 
 abstract function play();
  
}

class event extends Person{
   public $eventname;
   
   public function __construct($n, $a, $s, $p, $t){
       parent::__construct($n, $a, $s, $p, $t);
       $this->eventname="Holiday";
   }
   
    /*public function Iterateclass(){
        echo "Calling me instead";
     }*/
     
     
     public function play(){
     echo "\nWelcome to our play ground\n";
     echo parent::Iterateclass();
 }
 
 }
    




