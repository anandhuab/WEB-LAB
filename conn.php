﻿<?php

$servername='localhost';
$username='root';
$password='';
$dbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn) 
{
 die('could not connect My Sql:'.mysql_error());
}
else
{
echo "database connected";
}
?>
