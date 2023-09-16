<?php

$db_user = "root";
$db_pass = "";
$host = "localhost";
$db_name = "final_php";
$db_port = 3306;


try{
    $dsn = "mysql:dbname=$db_name;host=$host;port=$db_port";
    $connection = new PDO($dsn, $db_user, $db_pass);
    return $connection ;
    // echo"<h1>connection done</h1>";
}catch(PDOException $error){
    echo"<h1>connection done {$error->getMessage()}</h1>";
}




?>