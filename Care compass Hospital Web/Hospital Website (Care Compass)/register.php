<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Portal Registration</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    
    
</head>
<body>
    <div class="container">
        <div class="title">Registration Form</div>
        <form action="login_register.php" method="post">
            <div class="user-details">
                <div class="input-box ">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                
                
                <div class="input-box">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                

                <div class="input-box ">
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
                <p>Already have an account?<a href="Login.php"> Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>