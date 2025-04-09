<link rel="stylesheet" href="<?= base_url('assets/css/edit_exam.css') ?>">


<div class="form-wrapper">
  <h2>Edit Ujian</h2>

  <?php if (session()->has('error')) : ?>
      <div class="alert">
          <?= session('error') ?>
      </div>
  <?php endif; ?>

  <form action="<?= base_url('admin/update_exam/' . $exams['id']) ?>" method="post">
      <label for="title">Judul:</label>
      <input type="text" id="title" name="title" value="<?= esc($exams['title']) ?>" required>

      <label for="description">Deskripsi:</label>
      <textarea id="description" name="description" required><?= esc($exams['description']) ?></textarea>

      <label for="duration">Durasi (menit):</label>
      <input type="number" id="duration" name="duration" value="<?= esc($exams['duration']) ?>" required>

      <button type="submit" class="btn">💾 Simpan</button>
  </form>
</div>
