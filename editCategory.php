<?php 
session_start();

require 'conn.php';
require 'helpers.php';
require 'admin_requirements.php';

updateCategory();

if(!isset($_GET['id'])) redirectHome();

$category = $pdo_db_connection->prepare("select * from category where id=?");
$category->execute([$_GET['id']]);

$name = "";
if($row = $category->fetch()) {
    $name = $row['name'];
}
else {
    exit;
}

require 'dc.php';


?>

<main>
    <nav>
        <ul>
            <li><a href="logout.php">Log out</a></li>

        </ul>
    </nav>
    <article>
        <h2>Edit Category Admin</h2>

        <form action="#" method="post">
            <p>Edit Category <?= $name; ?> </p>

            <label>Enter the Category name</label>
            <input type="text" name="name" value=  "<?= $name; ?>" />

            <input type="submit" name="submit" value="Submit" />
        </form>
    </article>
</main>
<?php require 'footer.php';