<?php

namespace App\Factories;


use App\Entities\AdditionCalculation;
use App\Interfaces\InterfaceOperationFactoryChild;
use App\Interfaces\InterfaceCalculation;



class AdditionFactory implements InterfaceOperationFactoryChild {
    


    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new AdditionCalculation($a,$b);
    }
}