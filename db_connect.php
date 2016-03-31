<?php
/*

This file's sole purpose is to handle connection to the database on a server
To run on a local server, change each variable according to your database
server setup
E.g:
$server = "localhost";
$username = "root";
$password = "";

*/
$server = "mysql.nith.no";
$username = "marcle15";
$password = "marcle15";

        $link = new mysqli($server, $username, $password, "marcle15", 3306);

        if ($link->connect_error) {

            die('Connect error ('.$link->connect_errno.') '.$link->connect_error);

        }
?>