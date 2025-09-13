<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    
    <?php if (!empty($mahasiswa)): ?>
        <p><b>NIM:</b> <?= esc($mahasiswa['nim']) ?></p>
        <p><b>Nama:</b> <?= esc($mahasiswa['nama']) ?></p>
        <p><b>Umur:</b> <?= esc($mahasiswa['umur']) ?></p>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif ?>

    <a href="<?= site_url('DisplayMahasiswa'); ?>">Kembali</a>
</body>
</html>
