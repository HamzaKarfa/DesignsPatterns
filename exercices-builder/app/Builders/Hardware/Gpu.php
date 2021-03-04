<?php

namespace App\Builders\Hardware;

class Gpu {
    
    protected $gpu;
    
    
    public function __construct(string $gpu){
        $this->gpu = $gpu;
    }

}