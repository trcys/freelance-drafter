<!--
    Name: Tracy Salak
    Date: 2022-03-22
    Description: Error page when the user there is no content in the 'create' page.
-->
<?php
    include('authenticate.php');
    require('connect.php');

    // Creates the posts

    if(empty($_POST['title']) && empty($_POST['content']))
    {
        $message = "Both the title and content must be at least one character.";
    }

    // Checks if there's at least 1 character in title and below 50 characters
    elseif(empty($_POST['title']) || empty($_POST['title']) || strlen($_POST['title']) <= 0 || strlen($_POST['title']) > 50)
    {
        $message = "No title found!";
    }

    // Checks if there's at least 1 character in the content and below 500 characters
    elseif(empty($_POST['content']) || empty($_POST['content']) || strlen($_POST['content']) <= 0 || strlen($_POST['content']) > 500)
    {
        $message = "Please ensure the content is between 1 - 500 characters.";
    }

    // Checks if user clicks on the Create button, then filters and posts user's content to index.php(homepage)
    elseif($_POST['command'] == 'Create')
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $query = "INSERT INTO posts (title, content) values (:title, :content)";
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $content);

        $statement->execute();
        header('Location: index.php');
        exit();
    }

    // Checks if user clicks on Delete button, then deletes the content from the table
    elseif($_POST['command'] == 'Delete')
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $query     = "DELETE FROM posts WHERE id =:id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        header('Location: index.php');
        exit();
    }

    // Checks if user clicks on Update button, then updates the content in the table
    elseif($_POST['command'] == 'Update')
    {
        $title   = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $id      = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

        $query     = "UPDATE posts SET title = :title, content = :content WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $content);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        header('Location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Processing</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1><a href="index.php"></a></h1>
        </div> <!-- END div id="header" -->
           <h1>An error occured while processing your post.</h1>
           <p><?= $message ?></p>
            <a href="index.php">Return Home</a>
        <div id="footer">
            Copywrong 2022 - No Rights Reserved
        </div> <!-- END div id="footer" -->
    </div> <!-- END div id="wrapper" --> 
</body>
</html> 