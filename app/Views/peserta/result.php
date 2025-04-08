<!-- Load CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/hasil_ujian.css') ?>">

<div class="container">
    <h2>Hasil Ujian</h2>
    <p>Ujian: <strong><?= esc($examTitle) ?></strong></p>
    <p>Jawaban benar: <?= esc($correctCount) ?> dari <?= esc($totalQuestions) ?></p>
    <p>Skor: <strong><?= esc($score) ?>%</strong></p>

    <a href="<?= base_url('peserta/dashboard') ?>" class="btn">Kembali ke Dashboard</a>
</div>
