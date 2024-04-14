<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Dodawanie nowego użytkownika
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $conn->query($sql);
    echo "Użytkownik dodany pomyślnie.";
}

// Usuwanie użytkownika
if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE id='$user_id'";
    $conn->query($sql);
    echo "Użytkownik usunięty pomyślnie.";
}

$conn->close();
?>