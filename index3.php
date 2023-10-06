<?php

$text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como computadores";

$result = strstr($text, "não é que"); //false é default - podemos omitir

echo $result;
?>