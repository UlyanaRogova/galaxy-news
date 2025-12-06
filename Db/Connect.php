<?php
    error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $name = 'test';

    $link = mysqli_connect($host, $user, $pass, $name);
?>