<?php
//This file will connect  to mysql server.

$servername = "localhost";
$username = "root";
$password  = "TIKUEtonki5000?";
$dbname = "portfolio";


//creating connnection
$mysqli  = new mysqli($servername , $username , $password, $dbname  );


//checking the connetion
if($mysqli -> connect_error){
    die("Connection failed:" . $connect_error  );
}
 return $mysqli;



