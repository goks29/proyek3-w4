<!DOCTYPE html>
<html>
<head></head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <a href="<?= base_url('admin/manage_mahasiswa/new') ?>">Tambah Mahasiswa</a>
    <br><br>
    <table border="1" cellpading="5" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Role</th>
                <th>Nama Lengkap`</th>
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
                            <a href="<?= base_url('admin/manage_mahasiswa/edit/' . $mhs['id'])?>">edit</a> |
                            <a href="<?= base_url('admin/manage_mahasiswa/delete/' . $mhs['id'])?>"
                            onclick="return confirm('apakah anda yakin akan mengahapus Mahasiswa ini?')">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="4">Belum ada data mahasiswa</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>