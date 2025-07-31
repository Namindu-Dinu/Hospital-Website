<?php
session_start();
require_once "../../config.php";  // This file has your $conn connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['patient_name']);
    $email = mysqli_real_escape_string($conn, $_POST['patient_email']);
    $type = mysqli_real_escape_string($conn, $_POST['query_type']);
    $message = mysqli_real_escape_string($conn, $_POST['query_message']);
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO patient_queries (patient_name, email, query_type, message, submission_date) 
              VALUES ('$name', '$email', '$type', '$message', '$date')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: patient.php?status=success");
    } else {
        header("Location: patient.php?status=error");
    }
}
?>


