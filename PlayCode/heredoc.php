<?php

$ip = "10.1.1.1";

$dhcp = <<<EOT
ddns-update-style none;
default-lease-time 86400;
max-lease-time 86400;
authoritative;
option domain-name-servers 143.107.253.3,143.107.253.5;
shared-network "default" {
"$ip"
EOT;

    $nomes = ['joao', 'maria', 'fulano'];
    $helloer = '';
    foreach ($nomes as $nome) {
        $helloer .= 
<<<NAMES
        Seu nome é "$nome";
NAMES;

}

echo $dhcp;
echo '<hr>';
echo $helloer;
