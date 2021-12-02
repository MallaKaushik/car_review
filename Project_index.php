<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS_files/Project_index.css">
        <style type="text/css">
    	.cantainer1 .box{
        	width: 22%;
       	 margin: 20px; 
 	   }
	.modal-content{
	
	width:95%;
	}
</style>
    </head>
    <body>
        <section class="navbar">
            <div class="header">
				<h2 class="logo">My Logo</h2>
                <i class="fa fa-bars x2" onclick="menutoggle()"></i>
				<ul id="navigation">
					<li>
						<a href="#" class="active">Home</a>
					</li>
					<li>
						<a href="Customer_needs.html">Customer's Choice</a>
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
                    <li>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'" class="active" style="width:auto;">
                            <?php
                                $username = $_POST['uname'];
                                $password = $_POST['psw'];
                                
                                
                                $flag=0;
                                
                                $db = mysqli_connect("localhost:4848", "root", "", "registration");
                                $query = "SELECT * FROM `registration_details`";
                                $result = mysqli_query($db, $query);
                                if($db->connect_error){
                                die("Connection Failed : ".$db->connect_error);
                                }
                                else{
                                    while($row = mysqli_fetch_array($result)){
                                        if($row['username']==$username and $row['password']==$password){
                                            $flag = 1; 
                                            break;
                                        }
                                        else{
                                            $flag=0;
		      echo"No userFound";
                                        }
                                    }
                                }
                                if($flag==1){
                                    echo"".$username;
                                }
                                else{
                                    header("Location: Project_index.html");
                                }
                            ?>
                        </a>
					</li>
                    <i class="fa fa-times x2" onclick="menutoggle()"></i>
				</ul>
            </div>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="Project_index.html" method="">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>
                    <div class="container">
                      <button class="btn" type="submit">Logout</button>
                    </div>
                </form>
            </div>
            <div id="id02" class="modal1">
                <form id="regForm" class="modal-content animate" action="registration.php" method="POST">
                  <h1>Register</h1>
                  <!-- One "tab" for each step in the form: -->
                  <div class="tab">Name:
                    <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                    <p><input type="text" placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                  </div>
                  <div class="tab">Contact Info:
                    <p><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                    <p><input type="tel" placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                  </div>
                  <div class="tab">Birthday:
                    <p><input type="text" placeholder="dd" oninput="this.className = ''" name="dd"></p>
                    <p><input type="text" placeholder="mm" oninput="this.className = ''" name="nn"></p>
                    <p><input type="text" placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
                  </div>
                  <div class="tab">Login Info:
                    <p><input type="text" placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                    <p><input type="password" placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                  </div>
                  <div style="overflow:auto;">
                    <div style="float:right;">
                      <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button class="btn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                  </div>
                </form>
            </div>            
        </section>
        <div class="car">
            <div class="cantainer1">
                <div class="box">
                    <a href="Car1.html">
                        <div class="imgbx">
                            <img id="img" src="images/car1.jpg" alt="" style="object-fit:cover;">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Car_1</h3>
                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span>4/5</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="Car2.html">
                        <div class="imgbx">
                            <img id="img" src="images/car2.jpg" alt="" style="object-fit:cover;">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Car_1</h3>
                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span>4/5</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="Car3.html">
                        <div class="imgbx">
                            <img id="img" src="images/car_t.webp" alt="" style="object-fit:cover;">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Car_1</h3>
                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span>4/5</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="Car4.html">
                        <div class="imgbx">
                            <img id="img" src="images/car_v.webp" alt="" style="object-fit:cover;">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Car_1</h3>
                                <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span>4/5</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="cantainer1">
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car3.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car4.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car5.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car6.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cantainer1">
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car7.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car8.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car9.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="imgbx">
                        <img id="img" src="images/car10.jpg" alt="" style="object-fit:cover;">
                    </div>
                    <div class="content">
                        <div>
                            <h3>Car_1</h3>
                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <span>4/5</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        var modal1 = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal1.style.display = "none";
            }
        }
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }

        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }

        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
    </script>
    <script type="text/javascript">
        function menutoggle(){
            var element = document.getElementById("navigation");
            element.classList.toggle("show");
        }
    </script>
</html>