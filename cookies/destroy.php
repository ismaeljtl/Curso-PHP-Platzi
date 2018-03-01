<?php 

setcookie('count', null, time() -1);

echo 'la cookie ha sido destruida';