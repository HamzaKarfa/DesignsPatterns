<?php
namespace Patterns\Creational\Entities;

use Patterns\Creational\Interfaces\HeroInterface;
use Patterns\Creational\Entities\AbstractBoat;



class BoatB extends AbstractBoat {

    protected $damage = 40; 
    protected $description = 'a big ufo enemy ship';

}