<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $studentid = $_POST['studentid'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO students (fullname, studentid, address, dob, email, contact)
            VALUES ('$fullname', '$studentid', '$address', '$dob', '$email', '$contact')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view.php?fullname=$fullname&studentid=$studentid&address=$address&dob=$dob&email=$email&contact=$contact");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
