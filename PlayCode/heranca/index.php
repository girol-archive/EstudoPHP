<?php

require('autoload.php');

$c = new Core();

$c->in_core();

echo "<hr>";
$control = new Controller();
$control->in_controller();
$control->in_core();
