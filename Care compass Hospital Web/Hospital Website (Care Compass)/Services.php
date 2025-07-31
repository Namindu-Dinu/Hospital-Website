<!DOCTYPE html>
<html>
<head>
    <title> Our Services - Care Compass Hospitals </title>
    <link rel="stylesheet" type="text/css" href="Home.css"/>
    <link rel="stylesheet" type="text/css" href="services.css"/>
    
    
</head>
<body>
<header class="main-header">
            <div class="header-content">
                <a href="Home.html" class="logo">
                    <div class="logo-icon"> <img src="images/logo.png" alt="Logo" width="50" height="50" /></div>
                    <div class="logo-text">
                        Care 
                        <span>Compass Hospitals</span>
                    </div>
                </a>

                <nav>
                    <ul class="nav-menu">
                    <li><a href="Home.html" >Home</a></li>
                        <li><a href="Services.php"> Services</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn" onclick="redirectToLogin('Admin/php/patient.php')">Patient Portal</a>
                            <div class="dropdown-content">
                                <a href="#" onclick="redirectToLogin('Admin/php/AdminDash.php')">Admin Portal</a>
                                <a href="#" onclick="redirectToLogin('Admin/php/StaffDash.php')">Staff Portal</a>
                            </div>
                        </li>
                        </li>
                        <li><a href="Aboutus/Aboutus.html">About Us</a></li>
                        <li><a href="Home.html#contact">Contact</a></li>
                    </ul>
                </nav>
    </header>

    

    <section class="services-hero">
        <div>
            <h1>Our Medical Services</h1>
            <p>Comprehensive Healthcare Solutions for You and Your Family</p>
        </div>
    </section>

    
    <h2 class="heading">Laboratory Services & Tests</h2>
    
        <table class="test-table">
            <thead>
                <tr>
                    <th>Test Name</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Preparation Required</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Complete Blood Count (CBC)</td>
                    <td>1 day</td>
                    <td>$50</td>
                    <td>Fasting for 8 hours</td>
                    <td><a href="Bookappoinment.php" class="action-button">Booking</a></td>
                </tr>
                <tr>
                    <td>Lipid Profile</td>
                    <td>1 day</td>
                    <td>$75</td>
                    <td>Fasting for 12 hours</td>
                    <td><a href="Bookappoinment.php" class="action-button">Booking</a></td>
                </tr>
                <tr>
                    <td>Thyroid Function Test</td>
                    <td>2 days</td>
                    <td>$120</td>
                    <td>None</td>
                    <td><a href="Bookappoinment.php" class="action-button">Booking</a></td>
                </tr>
            </tbody>
        </table>
    
        <br>
        <br>

    <div class="services-container">
        <div class="services-grid">
            <div class="service-card">
                <div class="service-image">
                    <img src="images/emegency.jpg" alt="Emergency Care">
                </div>
                <div class="service-content">
                    <h3>Emergency Care</h3>
                    <p>24/7 emergency medical services with state-of-the-art facilities and experienced trauma care specialists.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="images/cardiology.jpg" alt="Cardiology">
                </div>
                <div class="service-content">
                    <h3>Cardiology</h3>
                    <p>Comprehensive heart care services including diagnostics, treatment, and rehabilitation programs.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            

            <div class="service-card">
                <div class="service-image">
                    <img src="images/Neurology.jpg" alt="Neurology">
                </div>
                <div class="service-content">
                    <h3>Neurology</h3>
                    <p>Expert neurological care with advanced diagnostic and therapeutic services for brain and nervous system conditions.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="images/Pediatrics.jpg" alt="Pediatrics">
                </div>
                <div class="service-content">
                    <h3>Pediatrics</h3>
                    <p>Specialized care for children from newborns to adolescents, with child-friendly facilities and expert pediatricians.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="images/Orthopedics.jpg" alt="Orthopedics">
                </div>
                <div class="service-content">
                    <h3>Orthopedics</h3>
                    <p>Complete bone and joint care including surgery, physiotherapy, and rehabilitation services.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-image">
                    <img src="images/Laboratory Services.jpg" alt="Laboratory Services">
                </div>
                <div class="service-content">
                    <h3>Laboratory Services</h3>
                    <p>Advanced diagnostic laboratory with quick and accurate test results for better healthcare decisions.</p>
                    <a href="#" class="learn-more">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <section class="features-section">
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">🏥</div>
                <h3>Modern Facilities</h3>
                <p>State-of-the-art medical equipment and comfortable patient rooms</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">👨‍⚕️</div>
                <h3>Expert Doctors</h3>
                <p>Experienced specialists providing the highest quality of care</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">⏰</div>
                <h3>24/7 Care</h3>
                <p>Round-the-clock medical services for your peace of mind</p>
            </div>
            <div class="feature-item">
                <div class="feature-icon">💊</div>
                <h3>Pharmacy</h3>
                <p>Full-service pharmacy with all necessary medications</p>
            </div>
        </div>
    </section>
    <script src="redirectToLogin.js"></script>
</body>
</html>