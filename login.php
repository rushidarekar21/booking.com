<?php
$name = $_POST['uname'];
$pass = $_POST['pwd'];
$contact = $_POST['cnt'];

$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
    die('Connection Failed   : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration(name, pass, contact) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $pass, $contact);
    $stmt->execute();
    echo "registered successfully.....";
    $conn->close();
}
?>