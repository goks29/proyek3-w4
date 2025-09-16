<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <h3>Tambah Mahasiswa</h3>
    <form method="post" action="<?= base_url('admin/manage_mahasiswa/store') ?>">
        <p>
            <label>Username</label>
            <input type="text" name="username" size="50">
        </p>
        <p>
            <label>Password</label>
            <input type="text" name="password" size="50">
        </p>
        <p>
            <label>Nama Lengkap</label>
            <input type="text" name="full_name" size="50">
        </p>
        <p>
            <label>Tanggal Masuk</label>
            <input type="date" name="entry_year" size="50">
        </p>
        
        <button type="submit">Simpan</button>
        <br><br>
        <a href="<?= base_url('admin/manage_mahasiswa')?>">Batal</a>
    </form>
</body>
</html>