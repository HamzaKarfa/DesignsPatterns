<?php

namespace App\Builders\Hardware;

class Cpu {
    
    protected $cpu;
    
    
    public function __construct(string $cpu){
        $this->cpu = $cpu;
    }

}