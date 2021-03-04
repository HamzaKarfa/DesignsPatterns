<?php


namespace App\Builders\Interfaces;


interface MasterInterface {


    public function build(): ComputerInterface;
    public function getBuilder(): BuilderInterface;
    public function setBuilder(BuilderInterface $builder): void ;
}
