<?php 
session_start();

require 'conn.php';

require 'helpers.php';


require 'admin_requirements.php';

//redirects if the id in the url doesnot match
if(isset($_GET['id']) == false) redirectHome();
// delects the artical with matching id
$articles = $pdo_db_connection->prepare('delete from article where id=?');
$articles->execute([$_GET['id']]);

redirect('adminArticles');
?>