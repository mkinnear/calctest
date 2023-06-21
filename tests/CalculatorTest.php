<?php

use App\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase{

    protected $calc;
    protected $result;

    /**?
     * When you need to set up each individual test
     * use the built in setUp method
    */
    protected function setUp(): void
    {
        $this->calc = new Calculator();
        $this->result  = $this->calc->add(20, 5);
    }

    /**?
     * To reset conditions after a siingle test as ran,
     * use the built in tearDown method
     */
    protected function tearDown(): void
    {
        $this->result = $this->calc->sub(20, 5);
    }

    public function testAdd()
    {
        $this->result = $this->calc->add(20, 5);
        $this->assertEquals(25, $this->result);
    }

    public  function testSub()
    {
        $this->result = $this->calc->sub(20, 5);
        $this->assertEquals(15, $this->result);
    }

    // public function testMul()
    // {
    //     $result = $this->calc->mul(20, 5);
    //     $this->assertEquals(100, $result);
    // }

    // public function testDiv()
    // {
    //     $result = $this->calc->div(0, 90);
    //     $this->assertEquals(0, $result);
    // }
}

?>