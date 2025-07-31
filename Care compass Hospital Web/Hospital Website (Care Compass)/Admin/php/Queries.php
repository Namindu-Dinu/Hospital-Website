<?php
session_start();
require_once "../../config.php";  


if(isset($_POST['delete_query'])) {
    $query_id = mysqli_real_escape_string($conn, $_POST['query_id']);
    mysqli_query($conn, "DELETE FROM patient_queries WHERE id = '$query_id'");
}

if(isset($_POST['delete_feedback'])) {
    $feedback_id = mysqli_real_escape_string($conn, $_POST['feedback_id']);
    mysqli_query($conn, "DELETE FROM patient_feedback WHERE id = '$feedback_id'");
}


$queries = mysqli_query($conn, "SELECT * FROM patient_queries ORDER BY submission_date DESC");
$feedback = mysqli_query($conn, "SELECT * FROM patient_feedback ORDER BY submission_datef DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Queries and Feedback - Care Compass Hospitals</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

:root {
    --primary: #2C3E50;
    --secondary: #3498DB;
    --accent: #E74C3C;
    --light: #00ccff;
    --success: #2ecc71;
    --warning: #f1c40f;
}

body {
    background-color: #f5f5f5;
}

.container {
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
}

.section {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 25px;
    margin-bottom: 40px;
}

h2 {
    color: var(--primary);
    margin-bottom: 20px;
    border-bottom: 2px solid var(--secondary);
    padding-bottom: 8px;
}

.card {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 15px;
    position: relative;
    border: 1px solid #ddd;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.card-title {
    font-weight: bold;
    color: var(--primary);
}

.card-date {
    color: #666;
    font-size: 0.9em;
}

.card-content {
    margin-bottom: 10px;
    line-height: 1.6;
    color: #444;
}

.tag {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.9em;
    background: var(--light);
    color: white;
    margin-bottom: 8px;
}

.delete-btn {
    float: right;
    background: var(--accent);
    color: white;
    border: none;
    padding: 7px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: -15px;
}

.delete-btn:hover {
    background: #c0392b;
}

.rating {
    color: var(--warning);
    font-size: 1.2em;
    margin-bottom: 10px;
}

.empty-message {
    text-align: center;
    color: #666;
    padding: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    .card-header {
        flex-direction: column;
        align-items: flex-start;
    }

    .delete-btn {
        float: none;
        width: 100%;
        margin-top: 10px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <!-- Queries Section -->
        <div class="section">
            <h2>Patient Queries</h2>
            <?php if(mysqli_num_rows($queries) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($queries)): ?>
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title"><?php echo htmlspecialchars($row['patient_name']); ?></span>
                            <span class="card-date"><?php echo date('M d, Y', strtotime($row['submission_date'])); ?></span>
                        </div>
                        <span class="tag"><?php echo htmlspecialchars($row['query_type']); ?></span>
                        <div class="card-content">
                            <?php echo htmlspecialchars($row['message']); ?>
                        </div>
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="query_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_query" class="delete-btn">Delete</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-message">No queries found.</div>
            <?php endif; ?>
        </div>

        <!-- Feedback Section -->
        <div class="section">
            <h2>Patient Feedback</h2>
            <?php if(mysqli_num_rows($feedback) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($feedback)): ?>
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title"><?php echo htmlspecialchars($row['patient_namef']); ?></span>
                            <span class="card-date"><?php echo date('M d, Y', strtotime($row['submission_datef'])); ?></span>
                        </div>
                        <div class="rating">
                            <?php
                            $rating = intval($row['rating']);
                            for($i = 0; $i < $rating; $i++) echo '★';
                            for($i = $rating; $i < 5; $i++) echo '☆';
                            ?>
                        </div>
                        <div class="card-content">
                            <?php echo htmlspecialchars($row['feedback']); ?>
                        </div>
                        <form method="POST" style="display: inline;">
                            <input type="hidden" name="feedback_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_feedback" class="delete-btn">Delete</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="empty-message">No feedback found.</div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>