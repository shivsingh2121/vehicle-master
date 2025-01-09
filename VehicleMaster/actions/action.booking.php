<?php
include('connection.php');

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if (isset($_POST['book'])) {
    // Sanitize and validate user inputs
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $car = ($_POST['choice']);
    $bookingdate = ($_POST['date']);
    $current =($_POST['slocation']);
    $elocation = ($_POST['elocation']);

$sql = "INSERT INTO booking (fname, email, phone,car,date,slocation,endloc)
VALUES ('$name', '$email', '$phone','$car','$bookingdate','$current','$elocation')";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>