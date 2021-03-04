<?php

namespace App\Builders;


use App\Builders\Interfaces\BuilderInterface;

class PCBuilder implements BuilderInterface {
    public function setPart(){
        return $this;
    }
    public function getComputer(){

    }
}