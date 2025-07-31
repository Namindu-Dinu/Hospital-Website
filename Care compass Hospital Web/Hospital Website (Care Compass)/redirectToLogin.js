function redirectToLogin(targetPage) {
            localStorage.setItem("redirectPage", targetPage);
            window.location.href = "Login.php";
        }
 