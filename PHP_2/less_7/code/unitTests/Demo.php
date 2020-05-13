<?php

use PHPUnit\Framework\TestCase;

class Demo extends TestCase{
    public function testMas(){
        $mas = [];
        $this->assertSame(0,count($mas));

        array_push($mas,"first");
        $this->assertSame("first",$mas[0]);

        //$last = array_pop($mas);
        $this->assertSame("first",array_pop($mas));
        $this->assertSame(1,count($mas));
    }
}