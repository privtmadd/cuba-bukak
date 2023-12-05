<?php

$databaseHost = 'localhost';
$databaseName = 'cute';
$databaseUsername = 'root';
$databasePassword = '';

$connect = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName) or

die ('gagal disambung ke db');

?>