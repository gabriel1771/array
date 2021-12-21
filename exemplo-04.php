<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => 25
));

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

$json = json_encode($pessoas);

var_dump($json);

?>