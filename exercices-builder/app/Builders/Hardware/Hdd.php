<?php

namespace App\Builders\Hardware;

class Hdd {
    
    protected $hdd;
    
    
    public function __construct(string $hdd){
        $this->hdd = $hdd;
    }

}