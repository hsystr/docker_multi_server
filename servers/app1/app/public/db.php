<?php

$db = new mysqli('db1', 'db1', 'test');

var_dump($db->server_info);
