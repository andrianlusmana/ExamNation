<?= $this->include('layouts/header') ?>

<h2>Edit Ujian</h2>

<?php if (session()->has('error')) : ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('admin/update_exam/' . $exams['id']) ?>" method="post">
    <label>Judul:</label>
    <input type="text" name="title" value="<?= esc($exams['title']) ?>" required>

    <label>Deskripsi:</label>
    <textarea name="description" required><?= esc($exams['description']) ?></textarea>

    <label>Durasi (menit):</label>
    <input type="number" name="duration" value="<?= esc($exams['duration']) ?>" required>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->include('layouts/footer') ?>
