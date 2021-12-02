<head>
	<title> Car Reviews </title>
	  <link rel="stylesheet" type="text/css" href="CSS_files/table1.css">
	
</head>
<?php
$budget = $_GET['budget'];
$mileage = $_GET['mileage'];
$type = $_GET['type'];
$fuel = $_GET['fule'];
$seating = $_GET['seating'];
$db = mysqli_connect("localhost:4848", "root", "", "project");
$query = "SELECT * FROM `carlist`";
$result = mysqli_query($db, $query);
?>
 <section class="display">
<section class="navbar">
            <div class="header">
				<h2 class="logo">My Logo</h2>
                <i class="fa fa-bars x2" onclick="menutoggle()"></i>
				<ul id="navigation">
					<li>
						<a href="Project_index.php">Home</a>
					</li>
					<li>
						<a href="Customer_needs.html"class="active">Customer's Choice</a>
					</li>
					<li>
						<a href="about.html">About US</a>
					</li>
					<li>
						<a href="Contact.html">Contact Us</a>
					</li>
					<li>
						<a href="display.php">Reviews</a>
					</li>
				</ul>
			</div>
</section>
 <table  align=center class="content-table">
<thead>
<tr>
 <th>Sno.</th>
 <th>Price</th>
 <th>Mileage</th>
 <th>Engine</th>
 <th>Transmission</th>
 <th>FuelType</th>
 <th>Seating</th>
 <th>Image</th>
 <th>Name</th>
 </tr>
</thead>
 <?php
 $flag=0;
 while($row = mysqli_fetch_array($result)){
 if($row['budget']<=$budget and $row['mileage']<=$mileage and 
$row['type'] == $type and $row['fule'] == $fuel and $row['seating']<=$seating ){
 echo"<tr>";
 echo"<td>".$row['id']."</td>";
 echo"<td>".$row['budget']." Lakhs Onwards</td>";
 echo"<td>".$row['mileage']." Kmpl</td>";
 echo"<td>".$row['engine']."</td>";
 echo"<td>".$row['type']."</td>";
 echo"<td>".$row['fule']."</td>";
 echo"<td>".$row['seating']."</td>";
echo"<td><img src='./images/".$row['image']."' width='200px' 
height='200px'></td>";
 echo"<td>".$row['Name']."</td>";
 echo"</tr>";
 $flag = $flag+1;
 }
 }
 if($flag==0){
 echo "NoThing Macthes you criteria Sorry -_-";
 }
 ?>
 </table>
 </section>