<?php 

class Miclase {

  public $a;
  public $b;
  public $c;
    

  public function __construct(){

  }

  // getters and setteres
  public function getA() {
    return $this->a;
  }

  public function setA($a) {
    $this->a = $a;
  }
  public function getB() {
    return $this->b;
  }

  public function setB($b) {
    $this->b = $b;
  }
  public function getC() {
    return $this->c;
  }

  public function setC($c) {
    $this->c = $c;
  }
// ------------------------------


    public function sumar() {
        return $this->getA() + $this->getB() +$this->getC();
      }
    
    public function restar(){
        return $this->getA() - $this->getB() -$this->getC();
      }
     public function multiplicar(){
        return $this->getA() * $this->getB() * $this->getC();
      }
      
      function division()
      {
        if ($this->getA() != 0 && $this->getB() != 0 && $this->getC() != 0) {
          return $this->getA() / $this->getB()  / $this->getC();
          # code...
        }else {
          echo "Error: No se puede dividir entre cero.";
      }
      }





























}



?>
