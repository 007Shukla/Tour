<?php
$host = 'localhost';
$user = 'root';
$pass = 'Abhishek@123';
$db = 'book_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id'];
        echo "<p class='success'>Login successful! Welcome, " . $user['username'] . "</p>";
    } else {
        echo "<p class='error'>Invalid email or password.</p>";
    }
}
?>
