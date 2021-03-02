<?php

use App\Factories\OperationFactory;
use App\Factories\AdditionFactory;
use App\Factories\SoustractionFactory;
use App\Entities\AdditionCalculation;
use App\Entities\SoustractionCalculation;


use PHPUnit\Framework\TestCase;



class FactoryTest extends TestCase {
    
    public function testAdditionCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('aDDition');
        $typeFactory  = $factory->createFactory();
        $Entites = $typeFactory->createCalculation($number1 ,$number2);
        $Entites->calculationType();



        $this->assertSame($number1 + $number2 ,$Entites->calculationType());
    }
    public function testSoustractionCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('soustractioN');
        $typeFactory  = $factory->createFactory();
        $Entites = $typeFactory->createCalculation($number1 ,$number2);
        $Entites->calculationType();



        $this->assertSame($number1 - $number2 ,$Entites->calculationType());
    }
    public function testMultiplicationCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('multipliCation');
        $typeFactory  = $factory->createFactory();
        $Entites = $typeFactory->createCalculation($number1 ,$number2);
        $Entites->calculationType();



        $this->assertSame($number1 * $number2 ,$Entites->calculationType());
    }
}
