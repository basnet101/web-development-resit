<?php 
session_start();

require 'conn.php';
require 'helpers.php';
$is_logged_in_user = false;


// checks whether the user is login or not
if(isset($_SESSION['login'])) {
    $is_logged_in_user = true;
}

// for showing latest 10 articles
$statement = $pdo_db_connection->prepare('SELECT * FROM article ORDER BY publishDate desc LIMIT 10');
$statement->execute();
require 'dc.php';

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
        <h2>Articles</h2>

        <ul>
            <?php
            // showing title and publishDate of the article 
            foreach($statement->fetchAll() as $rows) {
            echo '<li><p>'.$rows['title'].' <em>'.$rows['publishDate'].'</em></p></li>';
            }
        
            ?>
        </ul>
    </article>
</main>
<?php require 'footer.php';