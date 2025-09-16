<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h3>Edit Mahasiswa</h3>
    <br>
    <form method="post" action="<?= base_url('admin/manage_mahasiswa/update/' . $user['id'])?>">
        <p>    
            <label>Username</label>
            <input type="text" name="username" size="50" value="<?= esc($user['username'])?>" required>
        </p>
        <p>
            <label>Password</label>
            <input type="text" name="password" size="50" required>
        </p>
        <p>
            <label>Nama Lengkap</label>
            <input type="text" name="full_name" size="50" value="<?= esc($user['full_name'])?>" required>
        </p>
        <p>
            <label>Tanggal Masuk</label>
            <input type="date" name="entry_year" size="50" value="<?= esc($student['entry_year'])?>" required>
        </p>
        <button type="submit">Update</button>
        <a href="<?= base_url('admin/manage_mahasiswa')?>">Batal</a>
    </form>
</body>
</html>