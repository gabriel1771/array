<?php

$json = '[{"nome": "Glaucio", "idade": 25}, {"nome": "João", "idade": 20}]';

$data = json_decode($json, true);

var_dump($data);

?>