<?php

$date = date_create('2017-02-09 17:24:21');
var_dump($date);
echo date_format($date, 'd/m/Y à\s H:i:s');
