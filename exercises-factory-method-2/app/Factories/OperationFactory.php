<?php

namespace App\Factories;

use App\Entities\AdditionCalculation;
use App\Entities\SoustractionCalculation;
use App\Interfaces\InterfaceCalculation;
use App\Factories\AdditionFactory;
use App\Factories\SoustractionFactory;
use Exception;

class OperationFactory {

    protected $type;

    public function __construct(string $type){
        $this->type = $type;
    }
    
    public function createFactory()
    {
        // $factoryName = "App\Factories\\" .ucfirst(strtolower($this->type))."Factory";
        // if (!class_exists($factoryName)) {
        //     // return new Exception("Class not found", 404);
        //     throw new Exception("Sorry, i can't do this ! ", 404);
        // }
        //var_dump($factoryName);
        //$test = new $factoryName;
        //var_dump($test);
       
    
        switch (strtolower($this->type)) {
            case 'addition':
                return new AdditionFactory;
            case 'soustraction':
                return new SoustractionFactory;
            case 'multiplication':
                return new MultiplicationFactory;

            default:
                throw new Exception("Sorry, i can't do this ! ", 404);
        }
    }

}