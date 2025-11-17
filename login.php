<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE email='$email'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){
        $_SESSION['name'] = $user['name'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['age'] = $user['age'];
        $_SESSION['email'] = $user['email'];
        header("Location: tambah.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login_register.css">
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" alt="Elegant Women's Wear Logo" class="logo-image">
            </div>
            <nav>
                <a href="landing.php">Landing Page</a>
                <a href="about.php" class="active">About Us</a>
                <a href="login.php" class="btn-login">Log In</a>
            </nav>
        </div>
    </header>

    <div class="form-wrapper">
        <div class="auth-box">
            <h2 class="auth-title">Login</h2>
            
            <form method="POST" class="auth-form">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required class="auth-input"><br>
                
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required class="auth-input"><br>
                
                <button type="submit" name="login" class="auth-button">Log In</button>
            </form>
            
            <p class="auth-link">Don't have account? <a href="regis.php" class="auth-link-anchor">Sign Up</a></p>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p>VELLORA &middot; Chengson Imanuel Go @2025</p>
        </div>
    </footer>
    
</body>
</html>