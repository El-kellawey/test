<?php
require_once("../includes/connection.php");

if(isset($_POST['registerBTN'])){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userpassword = $_POST['userpassword'];
    $password = password_hash($userpassword , PASSWORD_DEFAULT);
    // print "$userpassword <br>";
    // print "$password";
    // make connection with DB
    $insertQ = "INSERT INTO `users` (`name` , `email` , `password`) VALUES(?,?,?)";

    $statement = $connection->prepare($insertQ);
    $statement->execute([$username, $useremail, $password]);
    header("location: ../index.php");
    
}else{
    header("location: ../register.php");
}

?>