<?php

require __DIR__ . '/autoload.php';

$new = new  \AbstractFactory\CocaColaFactory();
echo $new->bottle()->getDescription();
echo '<br>';
echo $new->watter()->getDescription();
