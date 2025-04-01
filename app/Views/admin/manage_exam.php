<?= $this->include('layouts/header') ?>

<h2>Kelola Ujian</h2>
<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($exams as $exam) : ?>
            <tr>
                <td><?= esc($exam['title']) ?></td>
                <td><?= esc($exam['description']) ?></td>
                <td><?= esc($exam['duration']) ?> menit</td>
                <td>
                    <a href="<?= base_url('admin/edit_exam/' . $exam['id']) ?>" 
                       class="btn btn-warning">
                        Edit
                    </a>
                    <a href="<?= base_url('admin/delete_exam/' . $exam['id']) ?>" 
                       class="btn btn-danger" 
                       onclick="return confirm('Hapus ujian?')">
                        Hapus
                    </a>
                    <a href="<?= base_url('admin/add-question/' . $exam['id']); ?>" 
                       class="btn btn-success">
                        Tambah Soal
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('layouts/footer') ?>
