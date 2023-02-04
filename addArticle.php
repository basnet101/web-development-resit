<?php 
session_start();
// $pdo  connection 
require 'conn.php';
require 'helpers.php';

require 'admin_requirements.php';

addArticle();

// selecting all the records from the 'category' of the database
$statement = $pdo_db_connection->prepare('SELECT * FROM category');
$statement->execute();

require 'dc.php';

?>

<main>
    <nav>
        <ul>
            <li><a href="logout.php">Log out</a></li>
        </ul>
    </nav>
    <article>
        <h2>Admin: Add Article</h2>

        <form action="#" method="post">

            <label>Write Article's Title</label>
            <input type="text" name="title" />

            <label>Write Article's Content</label>
            <textarea name="content"></textarea>

            <label>Select a Category For Article</label>

            
            <select name = "category" >
                <?php 
                //sets artical category based on the options from the artical database 
                foreach($statement->fetchAll() as $a){
                    $id = $a['id'];
                    $name = $a['name'];
                   
                    //sets value as the ID ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php }
                ?>
            </select>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </article>
</main>
<?php require 'footer.php'; ?>