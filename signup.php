<?php
include_once 'header.php';

?>

    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill in your credentials to sign up.</p>
        <form action="signup.inc.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Full name...">
            <div class="form-group">
                <input type="text" name="email" placeholder="Email..">
            </div>    
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" name="repeat_password" placeholder="Repeat password">
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Sign Up</button>
            </div>
        </form>
    </div>
    
<?php
include_once 'footer.php';
?>