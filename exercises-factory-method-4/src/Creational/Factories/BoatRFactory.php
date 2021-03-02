<?php


namespace Patterns\Creational\Factories;

use Patterns\Creational\Interfaces\BoatFactoryInterface;
use Patterns\Creational\Entities\BoatR;

class BoatRFactory implements BoatFactoryInterface {

    public function createBoat(){
        return new BoatR;
    }
}