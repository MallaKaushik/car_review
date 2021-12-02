<?php
$username = $_GET['uname'];
$password = $_GET['psw'];
$db = mysqli_connect("localhost:4848", "root", "", "registration");
$query = "SELECT username,password FROM `registration_details`";
$result = mysqli_query($db, $query);
$flag=0;
while($row = mysqli_fetch_array($result)){
 if($username == $row["username"] and $password == $row["password"]){
echo"".$row["username"]."<br>";
 $flag=1;
 break;
 }
 else{
 $flag=0;
 echo"No userFound";
 }
}
?>
