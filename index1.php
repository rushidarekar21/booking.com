<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "booking";

$con = mysqli_connect($server, $username, $password, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



$travellers = $_POST['travellers'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `book`.`book` (`travellers`, `name`, `age`, `gender`, `phone`) VALUES ('$travellers', '$name', '$age', '$gender', '$phone');";



if ($con->query($sql) === TRUE) {

    if ($travellers == 1) {
        // echo "<br> Your Amount to Pay is 5000 Rs <br>";
        $total = 5000;
    } else {
        $total = $travellers * 5000;
        // echo "Your Total Amount to Pay is . $total Rs";
    }
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Done</title>
    <link rel="stylesheet" href="index1.css">
</head>

<body>
    <div class="header">
        <h1>Travel Agency Management System</h1>
        <!-- <h2>Dashboard </h2> -->
        <div class="navbar">
            <ul>
                <li><a class="links" href="./index.html">Home</a></li>
                <li><a class="links" href="./packages.html">Packages</a></li>
                <li><a class="links" href="./bookpackages.html">Book Packages</a></li>
            </ul>
        </div>
    </div>

    <h1 class="total">Total Amount to Pay is <?php echo "$total" ?>
        <h1>
            <div class="payment">
                <h2> Choose the payment mode<h2>
                        <div id="payment">
                            <a href="payment.html"><button class="UPI">UPI</button><a>
                                    <a href="payment.html"><button class="cash">Cash</button><a>
                                            <a href="payment.html"><button class="cards">Credit/Debit Cards</button><a>
                        </div>
            </div>
</body>

</html>