<?= $this->include('layouts/header') ?>

<h2>Dashboard Peserta</h2>
<p>Selamat datang, <?= esc($session->get('user_name')) ?>!</p>

<h3>Daftar Ujian</h3>
<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($exams as $exam) : ?>
        <tr>
            <td><?= esc($exam['title']) ?></td>
            <td><?= esc($exam['duration']) ?> menit</td>
            <td><a href="<?= base_url('peserta/exam/' . $exam['id']) ?>" class="btn btn-primary">Mulai</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('layouts/footer') ?>
