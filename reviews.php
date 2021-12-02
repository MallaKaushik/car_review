<?php
$name = $_POST['company'];
$model= $_POST['car_model'];
$rating=$_POST['rating'];
$review = $_POST['car_review'];
$db = mysqli_connect("localhost:4848", "root", "", "reviews");
if($db->connect_error){
 die("Connection Failed : ".$db->connect_error);
}
else{
$stmt = $db->prepare("insert into review_details(company, model, rating, review) values(?, ?, ?, ?)");
echo "Successful";
 $stmt->bind_param("ssss",$name,$model,$rating,$review);
 $stmt->execute();
echo "Successful";
 header("Location: review.php");
 $stmt->close();
 $db->close();
}
?>
