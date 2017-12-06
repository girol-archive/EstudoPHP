<?php
        // revisar aqui!
if(!empty($POST['add_frase']) && !empty($_POST['add_autor'])) {
    $new_frase = $_POST['add_frase'];
    $new_autor = $_POST['add_autor'];

    $this->phrases->add_phrase();

    echo "Frase cadastrada com sucesso!";

    $url = BASE_URL.'phrase';
    $this->redirect($url);
    exit();
}

if(!empty($my_var)){
    echo "oi";
}