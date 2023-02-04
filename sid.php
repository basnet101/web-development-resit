<?php 
    //displays different sidebar based on login status 
    if(!$is_logged_in_user) { ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    <?php } else { ?>
        <li><a href="logout.php">Log out</a></li>
<?php }
?>