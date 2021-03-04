<?php

namespace App\Builders\Hardware;

class Ram {
    
    protected $ram;
    
    
    public function __construct(string $ram){
        $this->ram = $ram;
    }

}