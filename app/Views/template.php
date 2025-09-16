<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; }
        .header { background:#007bff; color:#fff; padding:15px; text-align:center; }
        .menu { background:#f4f4f4; padding:10px; text-align:center; }
        .menu a { margin:0 10px; text-decoration:none; color:#007bff; }
        .content { padding:20px; min-height:300px; justify-items: center; text-align:center;}
        .footer { background:#333; color:#fff; text-align:center; padding:10px; }
    </style>
</head>
<body>

    <div class="header">
        <?php
        $session = session();
        if($session->get('role') == "admin"): 
        ?>
            <h2>Admin Dashboard</h2>
        <?php else:?>
            <h2>Mahasiswa Dashboard</h2>
        <?php endif?>
    </div>

    <div class="menu">
        <?php
        $session = session();
        if ($session->get('role') == 'admin'):
        ?>
            <a href="<?= base_url('/admin/dashboard') ?>">Home</a>
        <?php else:?>
            <a href="<?= base_url('/mahasiswa/dashboard') ?>">Home</a>
        <?php endif?>

        <?php
        $session = session();
        if ($session->get('role') == 'admin'):
        ?>
            <a href="<?= base_url('admin/manage_mahasiswa')?>">Manajemen Mahasiswa</a>
            <a href="<?= base_url('admin/manage_courses')?>">Manajemen Mata Kuliah</a>
        <?php else:?>
            <a href="<?= base_url('mahasiswa/courses')?>">Ambil Mata Kuliah</a>
        <?php endif?>
        <a href="<?= base_url('logout')?>">Logout</a>
    </div>

    <div class="content">
        <?php if(session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <?php if(session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <?= $content ?>
    </div>

    <div class="footer">
        <p>&copy; <?= date('D-M-Y') ?> My Website</p>
    </div>

</body>
</html>