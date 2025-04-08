<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examination - Your Gateway to Academic Success</title>

    <!-- Style CSS -->
    
    <link rel="stylesheet" href="<?= base_url('assets/css/home_style.css') ?>">

    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="<?= base_url('assets/img/logo-3d.PNG'); ?>" alt="Examination Logo">
        </div>

        <div class="menu-btn">
            <i class="uil uil-bars" onclick="menuFunction()"></i>
        </div>

        <nav id="nav-menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="<?= base_url('login'); ?>">Login</a></li>
                <li><a href="<?= base_url('register'); ?>">Register</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Welcome to Examination</h1>
            <p>Your gateway to academic success</p>
            <a href="<?= base_url('login'); ?>" class="cta-button">Get Started</a>
        </div>
    </section>

    <section class="features">
        <div class="feature">
            <h2>Online Exams</h2>
            <p>Take exams online from anywhere, anytime.</p>
        </div>
        <div class="feature">
            <h2>Instant Results</h2>
            <p>Receive results instantly after completing exams.</p>
        </div>
    </section>

    <section class="testimonials">
        <div class="testimonial">
            <p>"Examination helped me improve my grades significantly. Highly recommended!"</p>
            <span class="user">Founder of Examination</span>
        </div>
    </section>

    <footer>
        <div class="contact">
            <p>Contact us: info@examination.com</p>
        </div>
        <div class="social">
            <a href="https://facebook.com/examination" target="_blank">Facebook</a>
            <a href="https://twitter.com/examination" target="_blank">Twitter</a>
        </div>
        <p>&copy; 2025 Examination. All rights reserved.</p>
    </footer>

    <script>
        function menuFunction() {
            var menu = document.getElementById('nav-menu');
            menu.classList.toggle('active');
        }

        
    </script>
</body>

</html>
