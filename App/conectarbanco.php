<?php

$config = array(
    'db_host' => getenv('DB_HOST') ?: 'subwaypay-db',
    'db_user' => getenv('DB_USER') ?: 'subwaypay',
    'db_pass' => getenv('DB_PASS') ?: 'subwaypay',
    'db_name' => getenv('DB_NAME') ?: 'subwaypay'
);

$conn = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

?>
