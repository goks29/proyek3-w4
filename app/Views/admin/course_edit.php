<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h3>Edit Mata Kuliah</h3>
    <br>
    <form method="post" action="<?= base_url('admin/manage_courses/update/' . $courses['id'])?>">
        <p>
            <label>Nama Mata Kuliah</label>
            <input type="text" name="course_name" size="50" value="<?= esc($courses['course_name'])?>">
        </p>
        <p>
            <label>Jumlah SKS</label>
            <input type='number' name="credits" value="<?= esc($courses['credits'])?>">
        </p>
        <button type="submit">Update</button>
        <a href="<?= base_url('admin/manage_courses')?>">Batal</a>
    </form>
</body>
</html>