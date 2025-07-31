<?php 
session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Portal Login</title>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <div id="login-form" class="form-box <?= isActiveForm('login', $activeForm); ?>">
            <div class="title">Login to Healthcare Portal</div>
            <form action="login_register.php" method="post">
                <?php echo showError($errors['login']); ?>
                <div class="input-box">
                    <label>User Type</label>
                    <select name="user_type" required>
                        <option value="" disabled selected>Select your user type</option>
                        <option value="admin">Administrator</option>
                        <option value="staff">Hospital Staff</option>
                        <option value="patient">Patient</option>
                    </select>
                </div>
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" name="login" class="button">Login</button>
                <div class="links">
                    <p>Don't have an account? <a href="#" onclick="showRegisterForm()">Register</a></p>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div id="register-form" class="form-box <?= isActiveForm('register', $activeForm); ?>">
            <div class="title">Registration Form</div>
            <form action="login_register.php" method="post">
                <?php echo showError($errors['register']); ?>
                <div class="user-details">
                    <div class="input-box">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <label>User Type</label>
                        <select name="user_type" required>
                            <option value="" disabled selected>Select your user type</option>
                            <option value="admin">Administrator</option>
                            <option value="staff">Hospital Staff</option>
                            <option value="patient">Patient</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="register" class="button">Register</button>
                <div class="links">
                    <p>Already have an account? <a href="#" onclick="showLoginForm()">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="Login.js"></script>
</body>
</html>
