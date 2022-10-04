<?php
/*
this file contains database onfiguration assuming you are running mysql
using user "root" and password " "
*/

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');

//try connecting to the database

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//CHECK  the connection

if($conn == false){
    dir('Error: Cannect connect');
}

?>