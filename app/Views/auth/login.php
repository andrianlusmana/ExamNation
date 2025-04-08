<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link ke CSS eksternal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/login_style.css'); ?>">
</head>
<body class="light-mode">

    <div class="theme-toggle">
        <button onclick="toggleMode()">🌙 / ☀️</button>
    </div>

    <div class="login-container">
        <h2>Login</h2>
        <form action="<?= base_url('/auth') ?>" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function toggleMode() {
            document.body.classList.toggle('dark-mode');
            document.body.classList.toggle('light-mode');
        }
    </script>
</body>
</html>
