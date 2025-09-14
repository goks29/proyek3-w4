<!DOCTYPE html>
<html>
<head></head>
<body>
    <h3>Daftar Mahasiswa</h3>
    <table border="1" cellpading="5" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($mahasiswa) && is_array($mahasiswa)): ?>
                <?php foreach ($mahasiswa as $mhs): ?> 
                    <tr>
                        <td><? esc($mhs['id'])?></td>
                        <td><? esc($mhs['username'])?></td>
                        <td><? esc($mhs['role'])?></td>
                        <td>
                            <a href="#">edit</a> | <a href="#">delete</a>
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