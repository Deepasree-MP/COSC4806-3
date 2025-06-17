<?php require_once 'app/views/templates/headerPublic.php'; ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create an Account</h2>
            </div>
        </div>
    </div>

    <form method="post" action="">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" class="form-control" name="confirm_password" required>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Create Account">
    </form>
    <br>
  <p><?php echo isset($message) ? $message : ""; ?></p>
</main>
<?php require_once 'app/views/templates/footer.php'; ?>
