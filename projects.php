<!--
    Name: Tracy Salak
    Date: 2022-03-22
    Description: Showcase of Projects
    Updated:
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <title>Projects</title>
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
                    <h3>PROJECTS</h3>
                </div>
            </section>

            <section class="section-content-2">
                <div class="content">
                    <img src="images/project1.jpg" alt="house-project-1">
                    <p>Designing a house is never easy. Takes a lot of precision.</p>
                </div>
            </section>

            <section class="section-content-3">
                <div class="content">
                    <img src="images/project2.jpg" alt="house-project-2">
                    <p>Without the exact measurements, the engineers will mess up the building!</p>
                </div>
            </section>

            <section class="section-content-4">
                <div class="content">
                    <img src="images/project3.jpg" alt="house-project-3">
                    <p>Sheds are cool too!</p>
                </div>
            </section>

            <div id="summernote"><p>Hello Summernote</p></div>
            <script>
                $(document).ready(function() {
                    $('#summernote').summernote();
                });
            </script>
        </div>

        <footer>
            Copyright 2022 - CJS Drafting/Design Services
        </footer>
    </div>
</body>
</html>