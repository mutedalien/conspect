<?php
$rule = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]{2,5}$/u";

$email = "test@mail.ru";

if (preg_match($rule, $email)) {
	echo "OK";
}