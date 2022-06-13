<?php
$host="host = 127.0.0.1";
$port= "port = 5432";
$dbname="dbname = services";
$user="user = postgres";
$password="password = 123";
$db = pg_connect("$host $port $dbname $user $password");
?>
