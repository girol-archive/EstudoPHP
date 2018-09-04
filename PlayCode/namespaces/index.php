<?php

require('lib1.php');
require('lib2.php');

use \app\lib1\lib;
use \app\lib2\lib as Furfles;

$my_lib = new Lib();

echo $my_lib->get_versao();

echo '<hr>';

$other_lib = new furfles();

echo $other_lib->get_versao();