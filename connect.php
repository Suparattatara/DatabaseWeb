<?php
$servername = "localhost"; 
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "db_tru"; // Replace with your database name

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>