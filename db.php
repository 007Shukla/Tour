<?php
$host = 'localhost';
$user = 'root';
$pass = 'Abhishek@123'; // your DB password
$db = 'book_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
