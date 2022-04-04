<!--
    Name: Tracy Salak
    Date: 2022-03-15
    Description: Simple Freelance Architect Site
    Updated:
-->

<!-- Fetches and shows all the values from the table database -->
<?php
  require('connect.php');
  $query = "SELECT * FROM posts ORDER BY ID DESC LIMIT 5"; // Shows posts up to 5 from descending order
  $statement = $db->prepare($query);
  $statement->execute();
  $blogposts = $statement->fetchAll()
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>CJS Services</title>
</head>
<body>
    <div class="wrapper">
        <header class="universal-header">
            <div class="logo-center">
                <h1><a href="index.php">CJS Drafting and Design Services</a></h1>
            </div>
            <nav class="header-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="booking.php">Booking</a></li>
                    <li><a href="https://m.facebook.com/CJS-DraftingDesign-Services-101578911921474/">Facebook</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>

        <div class="main-content">
            <section class="section-content-1">
                <div class="content">
                    <p>
                        Offering drafting and design services for your building permit required by City of Winnipeg!
                        <br><br>
                        CJS Drafting and Design Services was created in Winnipeg, Manitoba by Cora Salak
                    </p>
                </div>
            </section>

            <section class="section-content-2">
                <div class="content">
                    <img src="images/stockpic.jpg" alt="">
                </div>
            </section>

            <section class="section-content-3">
                <div class="content">
                    <h3>SKILLSETS</h3>
                    <p>Certificate: AutoCAD expert</p>
                </div>
            </section>
        </div>

        <footer>
            Copyright 2022 - CJS Drafting/Design Services
        </footer>
    </div>
    
</body>
</html>