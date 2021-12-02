<?php
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) || !empty($password)){
    $host ="localhost";
    $dbUsername = "root";
    $dbPassword ="";
    $dbName = "registration";
    
    //Creating coonection
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
       
     $SELECT = "SELECT username From login_details Where username = ? Limit 1";
     $INSERT = "INSERT Into login_details (username, password) values(?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
    }
}
else{
    echo "All Fields are required";
    die();
}
?>