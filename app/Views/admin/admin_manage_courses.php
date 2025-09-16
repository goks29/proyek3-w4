<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="container my-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Mata Kuliah</h3>
        <a href="<?= base_url('/admin/manage_courses/new') ?>" class="btn btn-success">Tambah Course</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
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
                            <a href="<?= base_url('admin/manage_courses/edit/' . $course['id'])?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= base_url('admin/manage_courses/delete/' . $course['id'])?>" 
                               onclick="return confirm('Apakah anda yakin akan menghapus Mata Kuliah ini?')" 
                               class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>
                <tr>
                    <td colspan="4" class="text-center">Belum ada data mata kuliah</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
