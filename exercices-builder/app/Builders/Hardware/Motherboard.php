<?php

namespace App\Builders\Hardware;

class Motherboard {
    
    protected $motherboard;
    
    
    public function __construct(string $motherboard){
        $this->motherboard = $motherboard;
    }

}