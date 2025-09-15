<!DOCTYPE html>
<html>
<head></head>
<body>
    <h3>Daftar Mata Kuliah</h3>
    <br><br>
    <table border="1" cellpadding="5" width="100%">
        <thead>
            <tr>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($courses) && is_array($courses)): ?>
                <?php foreach ($courses as $course): ?> 
                    <tr>
                        <td><?= esc($course['course_name'])?></td>
                        <td><?= esc($course['credits'])?></td>
                        <td>
                            <a href="<?= base_url('mahasiswa/enroll/' . $course['id']) ?>">Ambil MK</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="3">Belum ada data mata kuliah</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>