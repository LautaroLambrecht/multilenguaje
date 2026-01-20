<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora();
        $this->assertEquals(23, $calc->suma(3, 2));
    }
}