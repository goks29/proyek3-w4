<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
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

    <h3 class="mb-4">Tambah Mahasiswa</h3>

    <form method="post" action="<?= base_url('admin/manage_mahasiswa/store') ?>">

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                class="form-control" 
                required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="text" 
                id="password" 
                name="password" 
                class="form-control" 
                required>
        </div>

        <div class="mb-3">
            <label for="full_name" class="form-label">Nama Lengkap</label>
            <input 
                type="text" 
                id="full_name" 
                name="full_name" 
                class="form-control" 
                required>
        </div>

        <div class="mb-3">
            <label for="entry_year" class="form-label">Tanggal Masuk</label>
            <input 
                type="date" 
                id="entry_year" 
                name="entry_year" 
                class="form-control" 
                required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= base_url('admin/manage_mahasiswa')?>" class="btn btn-secondary ms-2">Batal</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
