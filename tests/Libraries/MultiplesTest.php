<?php

namespace Multiples\Tests\Libraries;

use PHPUnit\Framework\TestCase;
use Multiples\Libraries\Multiples;

class MultiplesTest extends TestCase
{

    public function testSuccessReturnInteger()
    {
        $multiples = new Multiples();
        $this->assertIsNumeric($multiples->testNumbers(11));
        $this->assertIsNumeric($multiples->testNumbers(31));
    }

    public function testSuccessReturnString()
    {
        $multiples = new Multiples();
        $this->assertIsString($multiples->testNumbers(30));
        $this->assertIsString($multiples->testNumbers(50));
        $this->assertIsString($multiples->testNumbers(60));
        $this->assertIsString($multiples->testNumbers(100));
    }

    public function testSuccessReturnNames()
    {
        $multiples = new Multiples();
        $this->assertEquals('BHUT', $multiples->testNumbers(9));
        $this->assertEquals('BHUT', $multiples->testNumbers(12));
        $this->assertEquals('IT', $multiples->testNumbers(20));
        $this->assertEquals('IT', $multiples->testNumbers(55));
        $this->assertEquals('BHUT TI', $multiples->testNumbers(30));
        $this->assertEquals('BHUT TI', $multiples->testNumbers(60));
    }
}
