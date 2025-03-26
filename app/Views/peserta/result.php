<?= $this->include('layouts/header') ?>

<h2>Hasil Ujian</h2>
<p>Ujian: <strong><?= esc($examTitle) ?></strong></p>
<p>Jawaban benar: <?= esc($correctCount) ?> dari <?= esc($totalQuestions) ?></p>
<p>Skor: <strong><?= esc($score) ?>%</strong></p>

<a href="<?= base_url('peserta/dashboard') ?>" class="btn btn-secondary">Kembali ke Dashboard</a>

<?= $this->include('layouts/footer') ?>
