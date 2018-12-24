<?php

define("HOST", "127.0.0.1:3307");
define("DBNAME" , "test");
define("DBUSER" , "root");
define("DBPASSWORD", "");

try{
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, DBUSER, DBPASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}catch(PDOException $e) {
    print "Error!: " . $e->getMessage() . "</br>";
    die();}

// array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")

?>


