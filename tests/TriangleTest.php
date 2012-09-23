<?php

class TriangleTest extends PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        $triangle = new Triangle(1);
    }

    public function testDrawTriangle1()
    {
        $out = (new Triangle(1))->draw();

        $this->assertEquals("*", $out[0]);
    }

    public function testDrawTriangle2()
    {
        $out = (new Triangle(2))->draw();

        $this->assertEquals("*", $out[0]);
        $this->assertEquals("**", $out[1]);
    }

    public function testDrawTriangle3()
    {
        $out = (new Triangle(3))->draw();

        $this->assertEquals("*", $out[0]);
        $this->assertEquals("**", $out[1]);
        $this->assertEquals("***", $out[2]);
    }

    public function testDrawTriangle6()
    {
        $out = (new Triangle(6))->draw();

        $this->assertEquals("*", $out[0]);
        $this->assertEquals("**", $out[1]);
        $this->assertEquals("***", $out[2]);
        $this->assertEquals("****", $out[3]);
        $this->assertEquals("*****", $out[4]);
        $this->assertEquals("******", $out[5]);
    }
}