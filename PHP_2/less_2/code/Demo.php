<?php

class TemplateSite{
    function header(){
        echo "Шапка сайта";
    }
    function footer(){
        echo "Шапка сайта";
    }
}

class Site{
    function content(){
        echo "Контент сайта";
    }
    
    function render(TemplateSite $template){
        $template->header();
        $this->content();
        $template->footer();
    }
}

class Admin{
    function content(){
        echo "Контент админки";
    }
    function render(TemplateSite $template){
        $template->header();
        $this->content();
        $template->footer();
    }
}


//
//class Demo{
//    function test(Main $obj){
//        //$obj = new Main;
//        return $obj->getName();
//    }
//}
//
//class Main{
//    private $name="Ivan";
//    
//    public getName(){
//        return $this->name;
//    }
//}
//
//$d = new Demo;
//$m = new Main;
//echo $d->test($m);