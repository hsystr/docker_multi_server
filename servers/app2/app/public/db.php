<?php

$db1 = new mysqli('db1', 'db1', 'test');
$db2 = new mysqli('db2', 'db2', 'test');

var_dump($db1->server_info);
var_dump($db2->server_info);
