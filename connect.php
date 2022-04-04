<!--
    Name: Tracy Salak
    Date: 2022-03-22
    Description: Connects to the phpMyAdmin database
-->

<!-- Used the code from: CRUD Demo Solution, db_connect.php -->
<?php
    define('DB_DSN','mysql:host=localhost;dbname=serverside;charset=utf8');
    define('DB_USER','serveruser');
    define('DB_PASS','gorgonzola7!');

    try {
        
        $db = new PDO(DB_DSN, DB_USER, DB_PASS);
        
    } catch (PDOException $e) {
        print "Error: " . $e->getMessage();
        die();
    }
?>