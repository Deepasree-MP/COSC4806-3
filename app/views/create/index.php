<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>
    <form method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        Confirm Password: <input type="password" name="confirm_password"><br><br>
        <button type="submit">Create</button>
    </form>

    <?php if (!empty($message)) : ?>
        <p style="color:red;"><?= $message ?></p>
    <?php endif; ?>
</body>
</html>
