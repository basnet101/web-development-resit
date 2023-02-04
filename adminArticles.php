<?php 
session_start();

require 'conn.php';
require 'helpers.php';

require 'admin_requirements.php';

//pdo prepare for select artical
$articles = $pdo_db_connection->prepare('select * from article');
$articles->execute();


require 'dc.php';


?>

<main>
    <nav>
        <ul>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
    <article>
        <h2> Admin: Article Management</h2>

        <a href = 'addArticle.php'><button>Add Article</button></a>

        <p>
            All Articles in Northampton News:
        </p>
       <ul>
        <?php 
        // link to delete or edit the article (admin user only!)
            foreach($articles->fetchAll() as $rwo) { ?>
                <li> <?=$rwo['title'] ?><a href="editArticle.php?id= <?=$rwo['id']?>."> Edit </a> <a href="deleteArticle.php?id=<?=$rwo['id'] ?>">Delete</a></li>';
          <?php  }
        ?>
       </ul>
    </article>
</main>
<?php require 'footer.php';