<?php
/*
Use your own local DB log in information. Local host should
have the same IP address. The username is usually 'root' most
of the time as well. The password and the specific DB name
will be different for you.
*/
$serverName = "127.0.0.1";
$dBUsername = "root";
$dBPassword = "newpassword";
$dBName = "loginsystemtut";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}