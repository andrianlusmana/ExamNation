<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <h1>Selamat datang, Admin!</h1>
    <a href="<?= base_url('admin/manage-exam'); ?>">Kelola Ujian</a>
    <a href="<?= base_url('admin/manage-users'); ?>">Kelola Pengguna</a>
    <a href="<?= base_url('admin/add-exam'); ?>" class="btn btn-success">Tambah Ujian</a>

</body>
</html>
