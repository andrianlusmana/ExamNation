<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link ke CSS eksternal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/register_style.css'); ?>">
</head>
<body class="light-mode">

    <div class="theme-toggle">
        <button onclick="toggleMode()">🌙 / ☀️</button>
    </div>

    <div class="register-container">
        <h2>Register</h2>
        <form action="<?= base_url('/register/store') ?>" method="post">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select name="role">
                <option value="participant">Peserta</option>
                <!-- <option value="admin">Admin</option> -->
            </select>
            <button type="submit">Daftar</button>
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
