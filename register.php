<?php 
session_start();

require 'conn.php';
require 'helpers.php';



// redirect logged in the users
if(isset($_SESSION['login'])) {
    redirectHome();
}


//register the user email and password
if(isset($_POST['email'])) {
    $statement = $pdo_db_connection->prepare("INSERT INTO users (email, name, password) values(?,?,?)");
    $criteria = [$_POST['email'], $_POST['name'],$_POST['password'] ];
    $statement->execute($criteria);
    redirect('login');

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
    <!-- register user form detailes  -->
    <article>
        <h2>Register into Northampton news</h2>
        <form action="#" method="post">
            <p>Enter your login cred:</p>

            <label>Enter your email</label>
             <input type="email" name = "email" />
            <label>Set a password</label>
             <input type="password" name = "password" />
            <label>Enter your name</label> 
            <input type="text" name = "name" />

            <input type="submit" name="submit" value="Submit" />
        </form>



    </article>
</main>
<?php require 'footer.php';