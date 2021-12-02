<head>
	<title> Car Reviews </title>
	  <link rel="stylesheet" type="text/css" href="CSS_files/table2.css">
	
</head>
<body>
<?php
$name = $_GET['car_name'];
$model = $_GET['car_model'];
$db = mysqli_connect("localhost:4848", "root", "", "reviews");
$query = "SELECT name,model,rating,review FROM `usedcars`";
$result = mysqli_query($db, $query);
?>
 <section class="display">
<section class="navbar">
            <div class="header">
				<h2 class="logo">My Logo</h2>
                <i class="fa fa-bars x2" onclick="menutoggle()"></i>
				<ul id="navigation">
					<li>
						<a href="Project_index.php" >Home</a>
					</li>
					<li>
						<a href="Customer_needs.html" class="active">Customer's Choice</a>
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
 <th>Car Name</th>
 <th>Model</th>
 <th>Rating</th>
 <th>Review</th>
 </tr>
</thead>
 <?php
 $flag=0;
 while($row = mysqli_fetch_array($result)){
 if($row['name']==$name and $row['model']==$model ){
 echo"<tr>";
 echo"<td>".$row['name']."</td>";
 echo"<td>".$row['model']."</td>";
 echo"<td>".$row['rating']."</td>";
 echo"<td>".$row['review']."</td?";
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