<?php
$title = $_POST['title'];
$email = $_POST['email'];
$problem = $_POST['error'];
$db = mysqli_connect("localhost:4848", "root", "", "contact");
if($db->connect_error){
die("Connection Failed : ".$db->connect_error);
}
else{
 $stmt = $db->prepare("insert into contact_details(title, email, problem) values(?, ?, ?)");
 $stmt->bind_param("sss",$title, $email, $problem);
 $stmt->execute();
 header("Location: contact.html");
 $stmt->close();
 $db->close();
}
?>