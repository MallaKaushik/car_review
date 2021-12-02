<?php
$company = $_POST['company'];
$model = $_POST['car_model'];
$rating = $_POST['rating'];
$review = $_POST['model_review'];
$db = mysqli_connect("localhost", "root", "", "reviews");
if($db->connect_error){
 die("Connection Failed : ".$db->connect_error);
}
else{
$stmt = $db->prepare("insert into review_details(company, model, rating, review) values(?, 
?, ?, ?)");
 $stmt->bind_param("ssis",$company, $model, $rating, $review);
 $stmt->execute();
 header("Location: review.php");
 $stmt->close();
 $db->close();
}
?>
