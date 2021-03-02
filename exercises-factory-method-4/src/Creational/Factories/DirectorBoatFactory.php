<?php

namespace Patterns\Creational\Factories;

use Patterns\Creational\Factories\BoatUFactory;
use Patterns\Creational\Factories\BoatRFactory;
use Patterns\Creational\Factories\BoatBFactory;
use Patterns\Creational\Factories\BoatEFactory;

use Exception;

class DirectorBoatFactory{

    protected $type;


    public function __construct($type){ 
        $this->type = ucfirst($type);
    }

    public function createFactory(){
        

        $factoryName = "Patterns\Creational\Factories\Boat" .ucfirst($this->type)."Factory";
        if (!class_exists($factoryName)) {
            throw new Exception("Sorry, i can't do this ! ", 404);
        }
        return new $factoryName;
   

        // switch ($this->type) {
        //     case 'U':
        //         return new BoatUFactory;
        //     case 'R':
        //         return new BoatRFactory;  
        //     case 'B':
        //         return new BoatBFactory;  
        //     case 'E':
        //         return new BoatEFactory;  
        //     default:
        //         throw new Exception("Aucun navire de ce type", 404);
        // }

    }



}