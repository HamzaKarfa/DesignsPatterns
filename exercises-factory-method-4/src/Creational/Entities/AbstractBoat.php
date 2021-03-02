<?php

namespace Patterns\Creational\Entities;

use Patterns\Creational\Interfaces\HeroInterface;

Abstract class AbstractBoat{

    protected $damage;
    protected $description;

     
    public function sendDamage(HeroInterface $heroShip){
        $heroShip->receiveDamage($this->getDamage());
    }

    public function getDamage(){
        return $this->damage;
    }
    public function getDescription(){
        return $this->description;
    }

}