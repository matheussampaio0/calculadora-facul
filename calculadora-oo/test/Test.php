<?php
require_once "../Calculadora.php"

class Test extends TestCase
{
    public function testCalculadora()
    {
        $calc = new Calculadora(['test']);
        //testa o metodo de somar
        $this->assertEquals(10, $calc->calucular(5, 5 , 1));
        $this->assertEquals(40, $calc->calucular(25, 15 , 1));
        //testa o metodo de subtração
        $this->assertEquals(20, $calc->calucular(30, 10, 2));
        $this->assertEquals(5, $calc->calucular(10, 5 , 2));
        //testa o metodo de multiplicação
        $this->assertEquals(6, $calc->calucular(3, 2, 3));        
    }
}