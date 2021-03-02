<?php


namespace Patterns\Creational\Factories;

use Patterns\Creational\Entities\BoatU;
use Patterns\Creational\Interfaces\BoatFactoryInterface;

class BoatUFactory implements BoatFactoryInterface {


    public function createBoat(){
        return new BoatU;
    }
}