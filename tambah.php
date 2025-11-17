<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="style_tambah.css">
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
                <a href="tambah.php" class="active">Input Data</a>
                <a href="index.php" >Show Data</a>
                <a href="landing.php" class="btn-login">Log Out</a>
            </nav>
        </div>
    </header>

    <div class="form-wrapper">
        <div class="auth-box">
            <h2 class="auth-title">Input Data</h2>
            
            <form method="POST" action="tambah_aksi.php" class="auth-form">
                <label for="outfit">Daily Outfit Preference :</label>
                <input type="text" name="outfit" placeholder="Ex: Casual and Minimalist" required class="auth-input">
                
                <label for="item">Preferred Clothing Item :</label>
                <input type="text" name="item" placeholder="Ex: Denim Jacket" required class="auth-input">
 
                <label for="size">Size Preference :</label>
                <select name="size" required class="auth-input">
                    <option value="">-- Choose Your Size --</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
          
                <label for="budget">Fashion Budget Range ($) :</label>
                <input type="number" name="budget" placeholder="Ex: 50$" required class="auth-input">
                
                <label for="purpose">Style Purpose :</label>
                <input type="text" name="purpose" placeholder="Ex: Weekends and Travel" required class="auth-input">
   
                <label for="material">Clothing Material Preference :</label>
                <input type="text" name="material" placeholder="Ex: Linen" required class="auth-input">
       
                <button type="submit" class="auth-button">SUBMIT</button>
            
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p>VELLORA &middot; Chengson Imanuel Go @2025</p>
        </div>
    </footer>
    
</body>
</html>