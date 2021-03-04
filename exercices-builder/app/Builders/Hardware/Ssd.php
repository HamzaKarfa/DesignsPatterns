<?php

namespace App\Builders\Hardware;

class Ssd {
    
    protected $ssd;
    
    
    public function __construct(string $ssd){
        $this->ssd = $ssd;
    }

}