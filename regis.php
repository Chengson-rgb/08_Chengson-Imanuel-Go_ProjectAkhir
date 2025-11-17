<?php
include 'koneksi.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];    
    $email = $_POST['email'];     
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    
    $query = "INSERT INTO login (name, username, age, email, password) VALUES ('$name','$username', '$age', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silakan login.');
        window.location='login.php';</script>";
    } else {
        echo "Gagal mendaftar!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
            <h2 class="auth-title">Registration</h2>
            
            <form method="POST" class="auth-form">
                
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" required class="auth-input"><br>
                
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" required class="auth-input"><br>
                
                <label for="age">Age</label>
                <input type="number" name="age" placeholder="Age" required class="auth-input"><br>
                
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required class="auth-input"><br>
                
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required class="auth-input"><br>
                
                <button type="submit" name="register" class="auth-button">Register</button>
            </form>
            
            <p class="auth-link">Already have an account? <a href="login.php" class="auth-link-anchor">Login here</a></p>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>VELLORA &middot; Chengson Imanuel Go @2025</p>
        </div>
    </footer>

</body>
</html>