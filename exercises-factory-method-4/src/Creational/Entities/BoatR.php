<?php

namespace Patterns\Creational\Entities;

use Patterns\Creational\Interfaces\HeroInterface;
use Patterns\Creational\Entities\AbstractBoat;

class BoatR  extends AbstractBoat {
    protected $damage = 20;
    protected $description = 'a rocket enemy ship';


}