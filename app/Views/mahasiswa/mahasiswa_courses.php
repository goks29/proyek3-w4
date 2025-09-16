<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-4">

    <h3 class="mb-3">Daftar Mata Kuliah</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
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
                            <?php if (in_array($course['id'], $takenCoursesId)): ?>
                                <span class="badge bg-success">Telah diambil</span>
                            <?php else: ?>
                                <a href="<?= base_url('mahasiswa/enroll/' . $course['id']) ?>" class="btn btn-sm btn-primary">Ambil MK</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="3" class="text-center">Belum ada data mata kuliah</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
