<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style_about.css">
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

    <section class="hero-slider">
        <div class="container">
            <div class="slider-wrapper" id="image-slider" style="max-height: 550px; overflow: hidden;"> 
                <span class="arrow left-arrow" onclick="changeSlide(-1)">&lt;</span>
                
                <div class="slides-container">
                    <div class="slide">
                        <img src="photo5.jpg" alt="Fashion Model 1" class="slide-image" style="height: auto; max-height: 550px; object-fit: contain;">
                    </div>
                    <div class="slide">
                        <img src="photo6.jpg" alt="Fashion Model 2" class="slide-image" style="height: auto; max-height: 550px; object-fit: contain;">
                    </div>
                    <div class="slide">
                        <img src="photo7.jpg" alt="Fashion Model 3" class="slide-image" style="height: auto; max-height: 550px; object-fit: contain;">
                    </div>
                    <div class="slide">
                        <img src="photo8.jpg" alt="Fashion Model 3" class="slide-image" style="height: auto; max-height: 550px; object-fit: contain;">
                    </div>
                </div>

                <span class="arrow right-arrow" onclick="changeSlide(1)">&gt;</span>
            </div>
            <div class="slider-dots" id="slider-dots">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </section>
    
    <script src="slider.js"></script>

    <h1 style="text-align: center;">About Vellora</h1>
    <p style="text-align: center; max-width: 600px; margin: 0 auto 30px;">Vellora was founded on the belief that modern elegance is best expressed through thoughtful details, refined silhouettes, and timeless quality. Every piece we create is designed with intention—merging contemporary aesthetics with classic sophistication to celebrate the confidence and individuality of today’s women. From material selection to the craftsmanship behind each stitch, we prioritize comfort, durability, and artistry, ensuring that every design carries meaning and purpose. At Vellora, fashion is more than clothing; it is a narrative of self-expression, a quiet form of luxury, and a commitment to creating beauty that endures.</p>

    <hr class="section-divider">

    <section class="about-content">
        <div class="container" style="max-width: 1000px; max-height: 1000px margin: 0 auto; display: flex; gap: 20px;">
            
            <div class="content-item">
            <div class="item-image-placeholder" style="overflow: hidden; display: flex; justify-content: center; align-items: center; background-color: white; border: 1px solid #E0DEDC; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.03); max-height: 400px;">
                <img src="photo9.jpg" alt="Our Vision" class="about-image" style="width: 100%; height: auto; object-fit: contain; object-position: center;">
            </div>
            <div class="item-text">
                <h3 style="text-align: left;">Our Vision</h3>
                <p style="text-align: left; max-width: none; margin: 0;">We aim to become a fashion brand that brings modern elegance to every woman through timeless designs crafted with quality and comfort in mind.</p>
                <p class="detail-text" style="text-align: left; max-width: none; margin: 0;">Inspiring women to feel confident and graceful in effortless, refined style.</p>
                <div class="line-divider"></div>
            </div>
            </div>

            <div class="content-item">
            <div class="item-image-placeholder" style="overflow: hidden; display: flex; justify-content: center; align-items: center; background-color: white; border: 1px solid #E0DEDC; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.03); max-height: 400px;">
                <img src="photo10.jpg" alt="Our Vision" class="about-image" style="width: 100%; height: auto; object-fit: contain; object-position: center;">
            </div>
            <div class="item-text">
                <h3 style="text-align: left;">Our Mission</h3>
                <p style="text-align: left; max-width: none; margin: 0;">We are committed to creating collections that prioritize premium materials, comfortable fits, and designs that complement the lifestyle of modern women.</p>
                <p class="detail-text" style="text-align: left; max-width: none; margin: 0;">Empowering every woman to express her authentic self through elegant, versatile, and timeless fashion.</p>
                <div class="line-divider"></div>
            </div>
            </div>

            <div class="content-item">
            <div class="item-image-placeholder" style="overflow: hidden; display: flex; justify-content: center; align-items: center; background-color: white; border: 1px solid #E0DEDC; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.03); max-height: 400px;">
                <img src="photo11.jpg" alt="Our Vision" class="about-image" style="width: 100%; height: auto; object-fit: contain; object-position: center;">
            </div>
            <div class="item-text">
                <h3 style="text-align: left;">Our Values</h3>
                <p style="text-align: left; max-width: none; margin: 0;">We value premium craftsmanship, thoughtful design, and a customer-centered experience rooted in warmth and care.</p>
                <p class="detail-text" style="text-align: left; max-width: none; margin: 0;">Each piece is created with attention to detail, consistency, and dedication—offering both comfort and elegance for every occasion.</p>
                <div class="line-divider"></div>
            </div>
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