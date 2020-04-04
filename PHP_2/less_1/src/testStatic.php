<?php
class A {
    public function foo() {
        static $x = 0;//статические свойства привязаны к классу, а не к объекту
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

//Singleton