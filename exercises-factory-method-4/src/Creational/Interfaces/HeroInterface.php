<?php

namespace Patterns\Creational\Interfaces;

interface HeroInterface{
    public function receiveDamage(int $damage);
    public function getLife();
}