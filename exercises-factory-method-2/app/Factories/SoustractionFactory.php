<?php


namespace App\Factories;

use App\Entities\SoustractionCalculation;
use App\Interfaces\InterfaceCalculation;
use App\Interfaces\InterfaceOperationFactoryChild;

class SoustractionFactory implements InterfaceOperationFactoryChild {
    
    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new SoustractionCalculation($a,$b);
    }

}