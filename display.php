<!DOCTYPE html>
<html>
<head>
	<title> Car Reviews </title>
	  <link rel="stylesheet" type="text/css" href="CSS_files/table.css">
	
</head>
<body>
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
<table  class="content-table">
<thead>
	<tr>
		<th>Car Name</th>
		<th>Model</th>
		<th>Rating</th>
		<th>Review</th>
	</tr>
</thead>
	<?php
	$conn=mysqli_connect("localhost:4848","root","","reviews");
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}
	$sql="SELECT name,model,rating,review from usedcars";
	$result=$conn->query($sql);

	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo"<tr><td>".$row["name"]."</td><td>".$row["model"]."</td><td>".$row["rating"]."</td><td>".$row["review"]."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "0 result";
	}
	$conn->close();
	?>
</table>
<a href="specific.html" class="a1">Reviews of a specific car</a>
</body>
</html>