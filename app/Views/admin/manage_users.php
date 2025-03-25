<?= $this->include('layouts/header') ?>

<h2>Kelola Pengguna</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= esc($user['name']) ?></td>
                <td><?= esc($user['email']) ?></td>
                <td><?= esc($user['role']) ?></td>
                <td>
                    <a href="<?= base_url('admin/delete_user/' . $user['id']) ?>" 
                       class="btn btn-danger" 
                       onclick="return confirm('Hapus user?')">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->include('layouts/footer') ?>
