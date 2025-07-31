<?php
session_start();
require_once "../../config.php";  


$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Appointments</title>
    <link rel="stylesheet" href="../css/AppoinmentManage.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Manage Appointments</h1>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>

                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['doctor'] ?></td>
                        <td><?= $row['appointment_date'] ?></td>
                        <td><?= $row['appointment_time'] ?></td>
                        <td class="action-links">
                            <a href="edit_appointment.php?id=<?= $row['id'] ?>" class="edit-link">Edit</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="delete-link" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>