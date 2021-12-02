<?php
$name = $_POST['car_name'];
$model = $_POST['model_name'];
$year=$_POST['model_year'];
$rating = $_POST['rating'];
$review = $_POST['model_review'];
$db = mysqli_connect("localhost:4848", "root", "", "reviews");
if($db->connect_error){
 die("Connection Failed : ".$db->connect_error);
}
else{
$stmt = $db->prepare("insert into usedcars(name, model, year, rating, review) values(?, 
?, ?, ?, ?)");
echo "Successful";
 $stmt->bind_param("ssiis",$name, $model, $year, $rating, $review);
 $stmt->execute();
echo "Successful";
 header("Location: yes.html");
 $stmt->close();
 $db->close();
}
?>
