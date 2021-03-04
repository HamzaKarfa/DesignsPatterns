<?php

namespace App\Builders;

use App\Builders\Interfaces\MasterInterface;
use App\Builders\Interfaces\BuilderInterface;
use App\Builders\Interfaces\ComputerInterface;

class Master implements MasterInterface
{
    /**
     * @var BuilderInterface
     */
    private $builder;

    /**
     * @return ComputerInterface
     */
    public function build(): ComputerInterface
    {
        return $this->builder->getComputer();
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder(): BuilderInterface
    {
        
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     */
    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }
}