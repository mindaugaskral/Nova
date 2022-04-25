<?php
include_once 'header.php';

?>

    <div class="wrapper">
        <h2>Log in</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="login.inc.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>">
            <div class ="invalid-feedback">
                <?php echo $errors['username'] ?>
            </div>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>">
                <div class ="invalid-feedback">
                    <?php echo $errors['password'] ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Log in">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>

<?php
include_once 'footer.php';
?>