<?php

// Alterando Header padrao para HTML
header('Content-Type: text/html; charset=utf-8');

if(!isset($var)):
    echo "variável não setada!!!";
endif;