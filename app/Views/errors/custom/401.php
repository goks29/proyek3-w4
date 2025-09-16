<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>401 - Unauthorized</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="text-center">
        <h1 class="display-4 text-danger">401</h1>
        <p class="lead">Anda harus login terlebih dahulu untuk mengakses halaman ini.</p>
        <a href="<?= base_url('/login') ?>" class="btn btn-primary">Login Sekarang</a>
    </div>
</body>
</html>
