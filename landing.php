<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style_landing.css">
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
            <a href="landing.php" class="active">Landing Page</a>
            <a href="about.php">About Us</a>
            <a href="login.php" class="btn-login">Log In</a>
        </nav>
    </div> 
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-text">
                <h1>Discover Your Signature.</h1>
                <p>The latest collection of luxury apparel. Crafted with meticulous detail from the finest materials, our designs ensure a truly luxurious experience.</p>
                <p class="tagline">An Investment in Timeless Style.</p>
                <a href="#" class="btn-learn-more">Learn More &gt;</a>
            </div>
            <div class="hero-image">
            <img src="photo1.jpg" 
            alt="Model mengenakan pakaian eksklusif dari katalog" 
            class="hero-product-image"
            style="width: 100%; height: auto; max-width: 500px; max-height: 800px; display: block;">
            </div>
        </div>
    </section>

    <hr class="section-divider">

    <section class="category-section" style="padding: 60px 0; background-color: #f7f3ed;">
    
        <div class="content-header" style="text-align: center; margin-bottom: 40px;">
            <h2 style="font-size: 2.5em; font-weight: 600; color: #333; margin-bottom: 10px;">The Exclusive Collections</h2>
            <p style="font-size: 1.1em; color: #666; max-width: 600px; margin: 0 auto;">
                Discover curated styles designed for every moment of grace. From elevated daily wear to unforgettable statement pieces.
            </p>
        </div>

        <div class="content-cards" style="
            display: flex; 
            gap: 30px; 
            justify-content: center; 
            max-width: 1200px; 
            margin: 0 auto;
            padding: 0 20px;
        ">
            
            <div class="card" style="flex: 1;">
                <a href="/luxe-daily" class="card-link" style="text-decoration: none; color: inherit; display: block; height: 100%;">
                    <div class="card-image-wrapper">
                        <img 
                            src="photo2.jpg" 
                            alt="Koleksi busana harian Luxe Daily" 
                            class="card-image"
                            style="width: 100%; height: 100%; object-fit: cover;"
                        >
                    </div>
                    <div class="card-label">Luxe Daily</div>
                </a>
            </div>

            <div class="card" style="flex: 1;">
                <a href="/signature-gowns" class="card-link" style="text-decoration: none; color: inherit; display: block; height: 100%;">
                    <div class="card-image-wrapper">
                        <img 
                            src="photo3.jpg" 
                            alt="Gaun malam Signature Gowns yang elegan" 
                            class="card-image"
                            style="width: 100%; height: 100%; object-fit: cover;"
                        >
                    </div>
                    <div class="card-label">Signature Gowns</div>
                </a>
            </div>

            <div class="card" style="flex: 1;">
                <a href="/refined-accents" class="card-link" style="text-decoration: none; color: inherit; display: block; height: 100%;">
                    <div class="card-image-wrapper">
                        <img 
                            src="photo4.jpg" 
                            alt="Aksesoris Refined Accents yang berkelas" 
                            class="card-image"
                            style="width: 100%; height: 100%; object-fit: cover;"
                        >
                    </div>
                    <div class="card-label">Refined Accents</div>
                </a>
            </div>

        </div>
    </section>

    <footer>
        <div class="container">
            <p>VELLORA &middot; Chengson Imanuel Go @2025</p>
        </div>
    </footer>

</body>
</html>