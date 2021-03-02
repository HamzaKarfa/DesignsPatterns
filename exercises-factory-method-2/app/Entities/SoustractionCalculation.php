<?php


namespace App\Entities;
use App\Interfaces\InterfaceCalculation;



class SoustractionCalculation implements InterfaceCalculation{
    protected $number1;
    protected $number2;

    public function __construct($a ,$b){
        $this->number1 = $a;
        $this->number2 = $b;
    }
    public function calculationType(){
        return  $this->number1 - $this->number2 ;
    }
}
