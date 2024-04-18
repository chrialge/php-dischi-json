<?php

$json_string = file_get_contents('disci.json');

header('Content-type: application/json');
echo $json_string;
