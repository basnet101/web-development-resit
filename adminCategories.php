<?php 
session_start();

require 'conn.php';
require 'helpers.php';

require 'admin_requirements.php';

//pdo prepare for select category
$articles = $pdo_db_connection->prepare('select * from category');
$articles->execute();
$articles = $articles->fetchAll();

require 'dc.php';


?>

<main>
    <nav>
        <ul>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
    <article>
        <h2>Admin: Category Management</h2>

        <a href = 'addCategory.php'><button>Add Category</button></a>

        <p>
            All Article Categories in Northampton News:
        </p>
       <ul>
        <?php 

            foreach($articles as $r) {
                // link to delete or edit the category (admin user only!)
                echo '<li>'.$r['name'].' <a href="editCategory.php?id='.$r['id'].'">Edit</a><a href="deleteCategory.php?id='.$r['id'].'">Delete</a></li>';
            }
        ?>

       </ul>
    </article>
</main>
<?php require 'footer.php';