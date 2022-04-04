<!--
    Name: Tracy Salak
    Date: 2022-03-22
    Description: The page where the user edits
-->
<?php 
    require('connect.php');
    if(isset($_GET['id']))
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        

        if(filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) === 0 || filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT))
        {
            $valid_id = filter_var($id, FILTER_VALIDATE_INT);

            $query = "SELECT * FROM posts WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $valid_id, PDO::PARAM_INT);
            $statement->execute();
            $blogposts = $statement->fetchAll();

            if(empty($blogposts))
            {
                header('Location: index.php');
                exit;
            }
        }
        else
        {
            header('Location: index.php');
            exit;
        }        
    }else
    {
        header('Location: index.php');
        exit;
    }
    
?>

<!-- Used HTML layout from: http://stungeye.com/school/blog/edit.php?id=2010 -->
<!-- See show.php about "?id=XXXX' info -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1><a href="index.php">Edit Post</a></h1>
        </div> <!-- END div id="header" -->
    <ul id="menu">
        <li><a href="index.php" >Home</a></li>
        <li><a href="create.php" >New Post</a></li>
    </ul> <!-- END div id="menu" -->
    <div id="all_blogs">
        <form action="process_post.php" method="post">
            <fieldset>
            <legend>Edit Blog Post</legend>

            <?php foreach ($blogposts as $blogpost): ?>
                <p>
                    <label for="title">Title</label>
                    <input name="title" id="title" value="<?= $blogpost['Title'] ?>"/> <!-- The value 'F' is taken from the previous 'title' value in index.php. -->
                </p>
                
                <p>
                    <label for="content">Content</label>
                    <textarea name="content" id="content"><?= $blogpost['Content'] ?></textarea>
                    
                </p>
                
                <p>
                    <input type="hidden" name="id" value="<?= $_GET['id']?>" />
                    <input type="submit" name="command" value="Update" />
                    <input type="submit" name="command" value="Delete" onclick="return confirm('Are you sure you wish to delete this post?')" />
                </p>
            <?php endforeach ?>
            </fieldset>
        </form>
    </div>
        <div id="footer">
            Copywrong 2022 - No Rights Reserved
        </div> <!-- END div id="footer" -->
    </div> <!-- END div id="wrapper" -->
</body>
</html>