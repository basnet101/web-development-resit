<?php 
session_start();

require 'conn.php';
require 'helpers.php';


require 'admin_requirements.php';

checkArticleExists();

updateArticle();



$list_article_data = $pdo_db_connection->prepare("select * from article where id=?");
$list_article_data->execute([$_GET['id']]);

$title; $content;
if($art_data_row = $list_article_data->fetch()) {
    $title = $art_data_row['title'];
    $content = $art_data_row['content'];
}
else {
    exit;
}

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
    <!-- edit artical form detailes -->
    <article>
        <h2>Edit Article Admin</h2>

        <form action="#" method="post">
            <p>Edit  An Article: <?= $title ?? '' ?></p>

            <label> Enter new Title</label>
            <input type="text" name="title" value = "<?= $title ?? '' ?>"/>

            <label>Edit the content of Article</label>
            <textarea name="content" ><?= $content ?? '' ?></textarea>

           

            <input type="submit" name="submit" value="Submit" />
        </form>
    </article>
</main>
<?php require 'footer.php';