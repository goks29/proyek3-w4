<!DOCTYPE html>
<html>
<head></head>
<body>
    <h3>Daftar Mata Kuliah</h3>
    <a href="<?= base_url('/admin/manage_courses/new') ?>">Tambah Course</a>
    <br><br>
    <table border="1" cellpading="5" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($courses) && is_array($courses)): ?>
                <?php foreach ($courses as $course): ?> 
                    <tr>
                        <td><?= esc($course['id'])?></td>
                        <td><?= esc($course['course_name'])?></td>
                        <td><?= esc($course['credits'])?></td>
                        <td>
                            <a href="<?= base_url('admin/manage_courses/edit/' . $course['id'])?>">edit</a> |
                            <a href="<?= base_url('admin/manage_courses/delete/' . $course['id'])?>"
                            onclick="return confirm('apakah anda yakin akan mengahapus Mata Kuliah ini?')">delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="4">Belum ada data mata kuliah</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>