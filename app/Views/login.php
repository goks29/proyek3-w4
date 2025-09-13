<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="<?= base_url('/processLogin') ?>">
        <p>
            <label>Username</label><br>
            <input type="text" name="username" value="<?= old('username') ?>">
        </p>
        <p>
            <label>Password</label><br>
            <input type="password" name="password">
        </p>
        <button type="submit">Login</button>
    </form>

</body>
</html>
