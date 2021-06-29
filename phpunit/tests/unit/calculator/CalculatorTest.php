<?php
use \PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase{


    /** @test */
    public function adds_up_given_operand(){

        $addition=new \App\Calculator\Addition;
        $addition->setOperands([5,10]);
        $this->assertEquals(15,$addition->calculate());
    }
}

?>