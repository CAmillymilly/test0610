<?php

$text = "O perigo de verdade não é que computadores passem a pensar como humanos, mas sim que humanos passem a pensar como computadores";

$length = strpos($text, "computadores passem"); //  posição onde inicia a string "computadores passem" = 30

$result = substr($text, 0, $length); //posição inicial = 0, comprimento = 20

echo $result
?>