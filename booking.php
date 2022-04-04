<!--
    Name: Tracy Salak
    Date: 2022-03-22
    Description: Booking appointment
    Updated:
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstylesheet.css" type="text/css">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <title>Booking</title>
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
                        Can't wait to meet you!
                    </p>
                </div>
            </section>

            <form id="clientinfo" action="booking.php" method="post">
                <fieldset id="paymentInfo">
                    <div class="client-booking">
                        <a name="shippinginfo"><h3>Book a consultation!</h3></a>
                        <ul>
                            <li>
                                <label for="name">Full Name</label>
                                <input id="name" name="name" type="text" />
                                <!--<p class="shippingError error" id="fullname_error">* Required field</p>-->
                            </li>
                            <li>
                                <label for="address">Address</label>
                                <input id="address" name="address" type="text" />
                                <!--<p class="shippingError error" id="address_error">* Required field</p>-->
                            </li>
                            <li>
                                <label for="city">City</label>
                                <input id="city" name="city" type="text" />
                                <!--<p class="shippingError error" id="city_error">* Required field</p>-->
                            </li>
                            <li>
                                <label for="postal">Postal Code</label>
                                <input id="postal" name="postal" type="text" />
                                <!--<p class="shippingError error" id="postal_error">* Required field</p>
                                <p class="shippingError error" id="postalformat_error">* Invalid postal code</p>-->
                            </li>
                            <li>
                                <label for="email">Email</label>
                                <input id="email" name="email" type="text" />
                                <!--<p class="shippingError error" id="email_error">* Required field</p>
                                <p class="shippingError error" id="emailformat_error">* Invalid email address</p>-->
                            </li>
                        </ul>
                    </div>
                    <input type="submit">
                </fieldset>
            </form>



        </div>

        <footer>
            Copyright 2022 - CJS Drafting/Design Services
        </footer>
    </div>
</body>
</html>