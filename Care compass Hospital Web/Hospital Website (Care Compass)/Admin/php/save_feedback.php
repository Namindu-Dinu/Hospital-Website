<?php
session_start();
require_once "../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['feedback_name']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $message = mysqli_real_escape_string($conn, $_POST['feedback_message']);
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO patient_feedback (patient_namef, rating, feedback, submission_datef) 
              VALUES ('$name', '$rating', '$message', '$date')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: patient.php?status=success");
    } else {
        header("Location: patient.php?status=error");
    }
}
?>