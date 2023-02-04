<?php 
session_start();

require 'conn.php';

require 'helpers.php';

//denies user to lohin page if its login 
if(isset($_SESSION['login'])) {
    header('Location:index.php');
    exit;
}


 
//verifies email and password to login 
if(isset($_POST['email'])) {
    
    //checks the database for matching email and password
    $statement = $pdo_db_connection->prepare('SELECT * FROM users WHERE email=? AND password=?');
    $criteria = [$_POST['email'],$_POST['password']];
    $statement->execute($criteria);
    if($user = $statement -> fetch()) { //database returns user if the email and password is correct
        $_SESSION['login'] = true;
        $_SESSION['user'] = $user['id'];
        $_SESSION['isAdmin'] = $user['isAdmin'];
        redirectHome();

    }
    else echo 'wrong password!!';
}

require 'dc.php';

?>

<main>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register an account</a></li>
        </ul>
    </nav>
    <article>
        <h2>Log in Page</h2>
        <form action="#" method="post">
            <p>Enter your login cred:</p>
        
            <label>email</label> <input type="email" name = "email" />
            <label>password</label> <input type="password" name = "password" />
            <input type="submit" name="submit" value="Submit" />
        </form>



    </article>
</main>
<?php require 'footer.php';