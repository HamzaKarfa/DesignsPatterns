<?php


namespace Patterns\Creational\Factories;

use Patterns\Creational\Interfaces\BoatFactoryInterface;
use Patterns\Creational\Entities\BoatE;

class BoatEFactory implements BoatFactoryInterface {

    public function createBoat(){
        return new BoatE;
    }
    
}