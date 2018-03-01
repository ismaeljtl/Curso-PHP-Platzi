<?php 

setcookie('count', ++$_COOKIE['count']);

echo 'ahora el valor es: ' . $_COOKIE['count'];