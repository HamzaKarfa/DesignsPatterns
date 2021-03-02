<?php

namespace Patterns\Creational\Entities;

use Patterns\Creational\Interfaces\HeroInterface;
use Patterns\Creational\Entities\AbstractBoat;

class BoatU  extends AbstractBoat {

    protected $damage = 30;
    protected $description = 'a big ufo enemy ship';
 
}