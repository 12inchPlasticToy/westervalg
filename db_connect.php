<?php
/*
This file's sole purpose is to create a connection to the server
*/

$server = "mysql.nith.no";
$username = "marcle15";
$passwd = "marcle15";
$db = "marcle15";
/*
$server = "localhost";
$username = "root";
$passwd = "";
$db = "marcle15";
*/

        $link = new mysqli($server, $username, $passwd, $db, 3306);

        if ($link->connect_error) {

            die('Connect error ('.$link->connect_errno.') '.$link->connect_error);

        }
?>