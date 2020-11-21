<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($password)) {
    $host = "localhost";
    $dbUsername ="root";
    $Password ="";
    $dbname ="shoopping";

    //create connection 

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
    if(mysqli_connect_error()) {
        die('connect error('. mysqli_connect_error().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT emailFrom register Where email = ? Limit 1";
        $INSERT = "INSERT Into register( firstname , lastname , email , password)values (?,?,?,?)";

        //prepare statement 

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param
    }

} else {
    echo "All fields are required";
    die();
}

?>