<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Compass Hospitals - Staff Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/AdminDash.css"/>

   
</head>
<body>
    <div class="sidebar">
    <div class="logo">
        <h2>Care Compass</h2>
        <p>Staff Panel</p>
    </div>
    <div class="nav-menu">
        <a class="nav-item" href="#">
            <i class="fas fa-home"></i>
            Dashboard
        </a>
      
        <a class="nav-item" href="AppoinmentManage.php">
            <i class="fas fa-calendar-check"></i>
            Appointments
        </a>
        <a class="nav-item" href="Queries.php">
            <i class="fas fa-question-circle"></i>
            Queries
        </a>
       
    </div>
</div>

    <div class="main-content">
        <div class="header">
            <h1>Staff Dashboard</h1>
            <div class="user-info">
                <span>Welcome, Staff</span>
                <button class="action-btn" onclick="logout()">Logout</button>
            </div>
        </div>

        <br>

        

        <div class="content-section" id="hospitalStatistics">
            <h2>Hospital Statistics</h2>
            <div class="stats-container">
                <div class="stat-card">
                    <h3>Total Patients</h3>
                    <p>1,245</p>
                </div>
                <div class="stat-card">
                    <h3>Total Appointments</h3>
                    <p>892</p>
                </div>
                <div class="stat-card">
                    <h3>Total Doctors</h3>
                    <p>32</p>
                </div>
                <div class="stat-card">
                    <h3>Available Beds</h3>
                    <p>56</p>
                </div>
            </div>
        </div>
        
        <div class="alert-container" id="alertContainer"></div>
    </div>
    <script>
        function logout() {
            
            window.location.href = '../../Login.php'; 
        }
    </script>
    
</body>
</html>