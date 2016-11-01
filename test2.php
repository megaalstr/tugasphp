<?php
 
//connectivity code$con=mysql_connect("localhost","root","") or die(mysql_error());
 
//create database
mysql_query("create database test");
//select database
mysql_select_db("test");
//create table stuinfo
$que="CREATE TABLE stuinfo 
(
stu_id INT AUTO_INCREMENT PRIMARY KEY ,
 
email VARCHAR( 50 ) NOT NULL ,
 
password VARCHAR( 50 ) NOT NULL ,
 
mobile BIGINT NOT NULL ,
 
address TEXT NOT NULL ,
 
gender ENUM( 'm', 'f' ) NOT NULL ,
 
hobbies VARCHAR( 100 ) NOT NULL ,
 
image VARCHAR( 200 ) NOT NULL ,
 
dob DATE NOT NULL ,
 
INDEX ( `gender` , `dob` ) ,
 
UNIQUE (`email` ,`mobile`)
 
);
 
//Execute query using query analyzer function
mysql_query($que);
 
?>