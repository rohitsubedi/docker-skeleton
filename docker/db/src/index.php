<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 'Off');
error_reporting(E_ALL);

$_GET += [
    'pgsql' => 'project-database',
    'username' => 'docker_test',
    'password' => 'docker_test',
    'driver' => 'pgsql',
];

require 'adminer-4.2.5-en.php';

