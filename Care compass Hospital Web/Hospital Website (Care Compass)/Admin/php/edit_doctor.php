<?php
session_start();
require_once "../../config.php"; 

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM doctors WHERE id=$id");
$doctor = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE doctors SET name='$name', specialty='$specialty', email='$email', phone='$phone' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: manage_doctors.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Doctor</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f4f4f4;
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           margin: 0;
       }
       
       .container {
           background-color: white;
           border-radius: 8px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           width: 600px;
           overflow: hidden;
       }

       h2 {
           text-align: center;
           margin: 0;
           padding: 30px 20px;
           background-color: #3498db;
           color: white;
           font-size: 24px;
       }

       form {
           padding: 30px;
           display: grid;
           gap: 20px;
       }

       .form-group {
           display: flex;
           flex-direction: column;
       }

       label {
           margin-bottom: 8px;
           color: #2c3e50;
           font-size: 14px;
       }

       input {
           padding: 12px;
           border: 1px solid #ddd;
           border-radius: 4px;
           font-size: 14px;
       }

       input:focus {
           outline: none;
           border-color: #3498db;
       }

       button {
           background-color: #3498db;
           color: white;
           padding: 15px;
           border: none;
           border-radius: 4px;
           cursor: pointer;
           font-size: 16px;
           margin-top: 10px;
       }

       button:hover {
           background-color: #2980b9;
       }

       @media (max-width: 768px) {
           .container {
               width: 90%;
               margin: 20px;
           }
       }
   </style>
</head>
<body>
   <div class="container">
       <h2>Edit Doctor</h2>
       <form method="POST">
           <div class="form-group">
               <label for="name">Doctor Name</label>
               <input type="text" id="name" name="name" value="<?= $doctor['name'] ?>" required>
           </div>

           <div class="form-group">
               <label for="specialty">Specialty</label>
               <input type="text" id="specialty" name="specialty" value="<?= $doctor['specialty'] ?>" required>
           </div>

           <div class="form-group">
               <label for="email">Email</label>
               <input type="email" id="email" name="email" value="<?= $doctor['email'] ?>" required>
           </div>

           <div class="form-group">
               <label for="phone">Phone</label>
               <input type="text" id="phone" name="phone" value="<?= $doctor['phone'] ?>" required>
           </div>

           <button type="submit">Update Doctor</button>
       </form>
   </div>
</body>
</html>