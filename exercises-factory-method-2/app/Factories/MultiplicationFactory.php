<?php

namespace App\Factories;


use App\Entities\MultiplicationCalculation;
use App\Interfaces\InterfaceOperationFactoryChild;
use App\Interfaces\InterfaceCalculation;



class MultiplicationFactory implements InterfaceOperationFactoryChild {
    


    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new MultiplicationCalculation($a,$b);
    }
} 
