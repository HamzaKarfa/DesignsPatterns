<?php


namespace Patterns\Creational\Factories;

use Patterns\Creational\Interfaces\BoatFactoryInterface;
use Patterns\Creational\Entities\BoatB;

class BoatBFactory implements BoatFactoryInterface {

    public function createBoat(){
        return new BoatB;
    }
}