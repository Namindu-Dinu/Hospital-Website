<?php
// delete_handlers.php
session_start();

// Add authentication check here if needed
// if(!isset($_SESSION['admin'])) {
//     die('Unauthorized access');
// }

$db_connection = mysqli_connect("localhost", "your_username", "your_password", "hospital_db");

function deleteQuery($id) {
    global $db_connection;
    $id = mysqli_real_escape_string($db_connection, $id);
    $query = "DELETE FROM patient_queries WHERE id = '$id'";
    return mysqli_query($db_connection, $query);
}

function deleteFeedback($id) {
    global $db_connection;
    $id = mysqli_real_escape_string($db_connection, $id);
    $query = "DELETE FROM patient_feedback WHERE id = '$id'";
    return mysqli_query($db_connection, $query);
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false];
    
    if(isset($_POST['delete_query'])) {
        $response['success'] = deleteQuery($_POST['query_id']);
    }
    
    if(isset($_POST['delete_feedback'])) {
        $response['success'] = deleteFeedback($_POST['feedback_id']);
    }
    
    echo json_encode($response);
}
?>