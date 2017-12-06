<?php

class variaveis {
    private $my_var = "foo";

    function show_var(){
        echo $this->my_var;
    }
}

$teste = new variaveis();

$teste->show_var();
