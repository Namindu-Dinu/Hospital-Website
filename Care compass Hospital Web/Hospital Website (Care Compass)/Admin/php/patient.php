<!DOCTYPE html>
<html>
<head>
    <title>Patient Portal - Care Compass Hospitals</title>
    <link rel="stylesheet" type="text/css" href="../css/patient.css"/>
    <link rel="stylesheet" type="text/css" href="../../Home.css"/>

    
</head>
<body>
    <header class="main-header">
        <div class="header-content">
            <a href="Home.html" class="logo">
                <img src="../../images/logo.png" alt="Logo" width="50" height="50" />
                <div class="logo-text">
                    Care Compass
                    <span>Hospitals</span>
                </div>
            </a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="../../Home.html">Home</a></li>
                    <li><a href="../../Services.php">Services</a></li>
                    <li><a href="#" class="active">Patient Portal</a></li>
                    <li><a href="../../Aboutus/Aboutus.html">About Us</a></li>
                    <li><a href="../../Home.html#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="portal-container">
        <div class="welcome-section">
            <h1>Welcome to Your Patient Portal</h1>
            <p>Access your medical records, schedule appointments, and manage your healthcare journey.</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <h3>
                    <span class="service-icon">📋</span>
                    Medical Records
                </h3>
                <p>Access your complete medical history, test results, and prescriptions.</p>
                <a href="../../Lab/lab.html" class="action-button">View Records</a>
            </div>

            <div class="service-card">
                <h3>
                    <span class="service-icon">🗓️</span>
                    Appointments
                </h3>
                <p>Schedule, reschedule, or cancel your appointments online.</p>
                <a href="../../Bookappoinment.php" class="action-button">Book Now</a>
            </div>

            <div class="service-card">
                <h3>
                    <span class="service-icon">💳</span>
                    Bill Payments
                </h3>
                <p>View and pay your medical bills securely online.</p>
                <a href="../../Lab/lab.html" class="action-button">Pay Bills</a>
            </div>

            <div class="service-card">
                <h3>
                    <span class="service-icon">🧪</span>
                    Lab Tests
                </h3>
                <p>Schedule lab tests and view results online.</p>
                <a href="../../Lab/lab.html" class="action-button">View Tests</a>
            </div>
        </div>

       

        
        <div class="form-section">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Submit Medical Query</h2>
            <form action="save_query.php" method="POST">
                <div class="form-group">
                    <label for="patient_name">Your Name</label>
                    <input type="text" id="patient_name" name="patient_name" required>
                </div>
                
                <div class="form-group">
                    <label for="patient_email">Email Address</label>
                    <input type="email" id="patient_email" name="patient_email" required>
                </div>
                
                <div class="form-group">
                    <label for="query_type">Query Type</label>
                    <select id="query_type" name="query_type" required>
                        <option value="">Select Query Type</option>
                        <option value="medical_services">Medical Services</option>
                        <option value="medical_tests">Medical Tests</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="query_message">Your Query</label>
                    <textarea id="query_message" name="query_message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Submit Query</button>
            </form>
        </div>

        <div class="form-section">
            <h2 style="color: var(--primary); margin-bottom: 20px;">Feedback and Reviews</h2>
            <form action="save_feedback.php" method="POST">
                <div class="form-group">
                    <label for="feedback_name">Your Name</label>
                    <input type="text" id="feedback_name" name="feedback_name" required>
                </div>
                
                <div class="form-group">
                    <label>Rating</label>
                    <div class="rating-stars">
                        <input type="radio" name="rating" value="1" id="star1" hidden>
                        <label for="star1" class="star-label">★</label>
                        
                        <input type="radio" name="rating" value="2" id="star2" hidden>
                        <label for="star2" class="star-label">★</label>
                        
                        <input type="radio" name="rating" value="3" id="star3" hidden>
                        <label for="star3" class="star-label">★</label>
                        
                        <input type="radio" name="rating" value="4" id="star4" hidden>
                        <label for="star4" class="star-label">★</label>
                        
                        <input type="radio" name="rating" value="5" id="star5" hidden>
                        <label for="star5" class="star-label">★</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="feedback_message">Your Feedback</label>
                    <textarea id="feedback_message" name="feedback_message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Submit Feedback</button>
            </form>
        </div>
    </div>

    <script>
        // Star rating functionality
        document.querySelectorAll('.star-label').forEach((star, index) => {
            star.addEventListener('click', () => {
                document.querySelectorAll('.star-label').forEach((s, i) => {
                    s.classList.toggle('active', i <= index);
                });
            });
        });
    </script>
</body>
</html>
</html>