<?php

define('host','192.168.2.10');
define('user','jenn');
define('pswd','silver447l');
define('dbname','blog');

try
{
    $dbh = new PDO('mysql:host='.host.';dbname='.dbname, user, pswd);
    
}
catch (Exception $e)
{
  echo "Unable to connect: " . $e->getMessage() ."<p>";
}