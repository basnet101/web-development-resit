<?php 
session_start();

require 'conn.php';
require 'helpers.php';

require 'dc.php';

$is_logged_in_user = false;

if(isset($_SESSION['login'])) {
    $is_logged_in_user = true;
}
if(isset($_GET['id']) == false) redirectHome();

//pull artical from the database based on id in the url
$statement = $pdo_db_connection->prepare('SELECT * FROM article where id=?');
$statement->execute([$_GET['id']]);
//
$title; $content; $publishDate;
if($row_data = $statement->fetch()) {
    $title = $row_data['title'];
    $content = $row_data['content'];
    $publishDate = $row_data['publishDate'];
}
addComment();
$comments =  $pdo_db_connection->prepare('SELECT * FROM comment where article=?');
$comments->execute([$_GET['id']]);
//post the values in the comment table of the dataabse
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

        <h1><?= $title ?></h1>
        <em><?= $publishDate ?></em>
        <p> <?=  $content ?></p>
        <?php 
        
        //displays comments area if the user is login
        if($is_logged_in_user == true) { ?>
           <form action="#" method="post">
           <label>Add A comment to the article:
             <?=$title; ?>
            </label> <textarea name = "commentText"></textarea>
           <input type = "submit"  value = "Submit" name = "submit" />
         <?php }
        ?>
        <ul style= 'clear:left'>
            <?php 
                foreach($comments as$rw) {
                    $user = $pdo_db_connection->prepare('SELECT * FROM users where id=?');
                    $user->execute([$rw['user']]);
                    $username = $user->fetch();
                    ?>
                    <li>
                    <?= $rw['comment']; ?>
                    User:
                    <?=  $username['name'] ?>
                    </li>
               <?php }       ?>
        </ul>
    </article>
</main>
<?php require 'footer.php';