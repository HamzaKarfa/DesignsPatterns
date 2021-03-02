<?php


namespace Patterns\Creational\Entities;


use Patterns\Creational\Interfaces\HeroInterface;



class HeroShip implements HeroInterface {
  
    protected $life;

    public function __construct($life)
    {
        $this->life = $life;
    }

    public function getLife():int
    {
        return $this->life;
    }
    public function receiveDamage($damage)
    {
        $this->life = $this->life - $damage;
    }

}