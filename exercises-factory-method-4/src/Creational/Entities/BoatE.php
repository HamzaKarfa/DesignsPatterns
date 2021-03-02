<?php

namespace Patterns\Creational\Entities;
use Patterns\Creational\Interfaces\HeroInterface;
use Patterns\Creational\Entities\AbstractBoat;

class BoatE  extends AbstractBoat{

    protected $damage = 10; 
    protected $description = 'an enemy ship';

}