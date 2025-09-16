<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Mahasiswa</h3>
        <a href="<?= base_url('admin/manage_mahasiswa/new') ?>" class="btn btn-success">Tambah Mahasiswa</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Nama Lengkap</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($mahasiswa) && is_array($mahasiswa)): ?>
                <?php foreach ($mahasiswa as $mhs): ?> 
                    <tr>
                        <td><?= esc($mhs['id'])?></td>
                        <td><?= esc($mhs['username'])?></td>
                        <td><?= esc($mhs['role'])?></td>
                        <td><?= esc($mhs['full_name'])?></td>
                        <td>
                            <a href="<?= base_url('admin/manage_mahasiswa/edit/' . $mhs['id'])?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('admin/manage_mahasiswa/delete/' . $mhs['id'])?>" 
                               onclick="return confirm('Apakah anda yakin akan menghapus Mahasiswa ini?')" 
                               class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="5" class="text-center">Belum ada data mahasiswa</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
