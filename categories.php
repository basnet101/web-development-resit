<?php 
session_start();

require 'conn.php';
require 'helpers.php';
require 'dc.php';

$is_logged_in_user = false;
// checks whether the user is login or not
if(isset($_SESSION['login'])) {
    $is_logged_in_user = true;
}
//checks whether user is admin 
if(isset($_GET['id']) == false) redirectHome();

//gets all the category records with matchiung id

$statement = $pdo_db_connection->prepare('SELECT * FROM category where id=?');
$statement->execute([$_GET['id']]);
$name = '';
if($row = $statement->fetch()) {
    $name = $row['name'];
}
?>

<main>
    <nav>
        <ul>
            <?php 
            require 'sid.php';
            ?>
        </ul>
    </nav>
    <article>

        <h1><?= 'Articles in  '. $name.' Category' ?> </h1>
        <ul>
            <?php 
            //gets the all the artical with matching id
            $articles =  $pdo_db_connection->prepare('select * from article where categoryId=?');
            $criteria = [$_GET['id']];
            $articles->execute($criteria);
            $articles = $articles->fetchAll();
            
            // executed data being fetched
            foreach($articles as $ro) {
                $id = $ro['id'];
                $title = $ro['title'];
                echo '<li><a href="art.php?id='.$id.'"> '.$title.' </a></li>';
            }
            
            ?>
        </ul>
    </article>
</main>
<?php
require 'footer.php';
