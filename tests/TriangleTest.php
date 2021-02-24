<?php


use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    function testIsTriangle()
    {
        $a = 4;
        $b = 3;
        $c = 2;

        $expected = 'La tam giac';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);

    }

    function testNotTriangle1(){
        $a = 1;
        $b = 3;
        $c = 4;

        $expected = 'Khong la tam giac';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }

    function testNotTriangle2(){
        $a = 4;
        $b = 3;
        $c = 1;

        $expected = 'Khong la tam giac';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }

    function testNotTriangle3(){
        $a = 2;
        $b = 3;
        $c = 1;

        $expected = 'Khong la tam giac';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }

    function testIsIsoscelesTriangleC() {
        $a = 2;
        $b = 2;
        $c = 1;

        $expected = 'La tam giac can';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }

    function testIsIsoscelesTriangleB() {
        $a = 2;
        $b = 1;
        $c = 2;

        $expected = 'La tam giac can';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }

    function testIsIsoscelesTriangleA() {
        $a = 1;
        $b = 2;
        $c = 2;

        $expected = 'La tam giac can';
        $triangle = new Triangle($a, $b, $c);
        $actual = $triangle->check();
        $this->assertEquals($expected, $actual);
    }


}