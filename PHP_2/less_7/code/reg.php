<?php
//test@mail.ru

$rule = "/^[a-zA-Z.-_0-9]+@[a-zA-Z0-9_-]+\.[a-zA-Zа-яА-Я]{2,5}$/u";


if(preg_match($rule,"test@mail.рф")){
    echo "ok";
}