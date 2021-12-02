<?php
$firstname = $_POST['fname'];
$lastname= $_POST['lname'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$username= $_POST['uname'];
$password= $_POST['pword'];
$db = mysqli_connect("localhost:4848", "root", "", "registration");
if($db->connect_error){
 die("Connection Failed : ".$db->connect_error);
}
else{
$stmt = $db->prepare("insert into registration_details(firstname, lastname,email, phone, username, password) values(?, ?,
?, ?, ?, ?)");
echo "Successful";
 $stmt->bind_param("sssiss",$firstname,$lastname,$email,$phone,$username,$password);
 $stmt->execute();
echo "Successful";
 header("Location: Project_index.php");
 $stmt->close();
 $db->close();
}
?>
