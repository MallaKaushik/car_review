<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Car</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="CSS_files/review.css">

    </head>
    <body>
        <section id="overlay">
            <section class="navbar">
                <div class="header">
                    <h2 class="logo">My Logo</h2>
                    <ul id="navigation">
                        <li>
                            <a href="Project_index.php">Home</a>
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
                    </ul>
                </div>
            </section>
            <section class="container">
                <div class="form">
                    <table cellpadding="20" cellspacing="30" class="form_table">
                        <form class="review_form" action="reviews.php" method="POST">
                            <caption class="form_caption">Drop Your Review Here</caption>
                            <tr class="company">
                                <td class="company_text">Select Car Company</td>
                                    <td class="comapny_select">
                                        <select name="company" required>
                                            <option  selected hidden value="">Select A comapany</option>
                                            <option value="Tata">Tata</option>
                                            <option value="Benz">Benz</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Volkswagen">Volkswagen</option>
                                            <option value="Skoda">Skoda</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Jaguar">Jaguar</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Volvo">Volvo</option>
                                        </select>
                                    </td>
                            </tr>
                            <tr class="model">
                                <td class="model_text">Enter The car model : </td>
                                <td class="model_input"><input type="text" placeholder="Enter Model like SUV or XVU....." name="car_model" required></td>
                            </tr>
                            <tr class="rating">
                                <td class="rating_text">Give Your Rating</td>
                                <td class="rating_select">
                                    <select name="rating" required>
                                        <option selected hidden value="">Please give Rating of your used car</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="review">
                                <td class="review_text">Enter The Review : </td>
                                <td class="review_input"><input type="text" placeholder="Enter review" name="car_review" required></td>
                            </tr>
                            <tr colspan="2" class="submit">
                                <td><input type="submit" name="submit"></td>
                            </tr>
                        </form>
                    </table>
                </div>
                <div class="img">
                    <img src="images/car2.jpg" width="350px" height="350px">
                </div>
            </section>
        </section>
    </body>
</html>