<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ujian</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <h1>Tambah Ujian</h1>

    <?php if (session()->getFlashdata('error')) : ?>
        <p style="color: red;"><?= session()->getFlashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?= base_url('admin/store-exam'); ?>" method="post">
        <label for="title">Judul Ujian:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required></textarea>

        <label for="duration">Durasi (menit):</label>
        <input type="number" id="duration" name="duration" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="<?= base_url('admin/manage-exam'); ?>">Kembali</a>
</body>
</html>
