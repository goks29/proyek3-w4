<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h3>Tambah Mata Kuliah</h3>
    <form method="post" action="<?= base_url('admin/manage_courses/store') ?>">
        <p>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="course_name" size="50">
        </p>
        <p>
            <label>Jumlah SKS</label>
            <input type="number" name="credits">
        </p>
        <button type="submit">Simpan</button>
        <a href="<?= base_url('admin/manage_courses')?>">Batal</a>
    </form>
</body>
</html>