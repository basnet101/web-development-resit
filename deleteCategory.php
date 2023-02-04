<?php 
session_start();

require 'conn.php';
require 'helpers.php';

require 'admin_requirements.php';

//redirects if the id in the url doesnot match
if(!isset($_GET['id'])) redirectHome();

// delects the category with matching id
$categories = $pdo_db_connection->prepare('delete from category where id=?');
$categories->execute([$_GET['id']]);

redirect('adminCategories');


?>