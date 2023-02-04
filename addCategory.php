<?php 
session_start();

require 'conn.php';
require 'helpers.php';

require 'admin_requirements.php';
addCategory();

require 'dc.php';


?>

<main>
    <nav>
        <ul>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
    <article>
        <h2>Admin: Add Category</h2>
        <form action="#" method="post">
            <label>Write Category's name</label>
            <input type="text" name="name" >
            <input type="submit" name="submit" value="Submit" >
        </form>
    </article>
</main>
<?php require 'footer.php';