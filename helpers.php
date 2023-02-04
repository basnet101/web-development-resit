<?php
function updateArticle() {    
    if(isset($_POST['title'])) {
        global $pdo_db_connection;
        $statement = $pdo_db_connection->prepare("update article set title=?, content=? where id=?");
        $criteria = [$_POST['title'],$_POST['content'], $_GET['id']];
        $statement->execute($criteria);
    }
}
 /// function to redirect to any page
function redirect($d) {
    header('Location:'.$d.'.php');
    exit;
}

function redirectHome() {
    redirect('index');
    exit;
}

function addCategory() {
    global $pdo_db_connection;

    //sets the category values in the dataabse
    if(isset($_POST['name'])) {
        $statement = $pdo_db_connection->prepare("INSERT INTO category (name) values(?)");
        $criteria = [$_POST['name']];
        $statement->execute($criteria);

    }

}

function addComment() {
    global $pdo_db_connection;

    if(isset($_POST['commentText']) == true) {
        $cmt = $pdo_db_connection->prepare("INSERT INTO comment (comment, article, user) values(:bis,:bas,:net)");
        $criteria = ['bis'=>$_POST['commentText'],'bas'=>$_GET['id'],'net'=>$_SESSION['user']];
        $cmt->execute($criteria);
    }
}

function addArticle() {
    //post content on submission and add new aritcile 
if(isset($_POST['title'])) {
    global $pdo_db_connection;
    $statement = $pdo_db_connection->prepare("INSERT INTO article (title, content, categoryId, publishDate) values(?,?,?,?)");
    $criteria = [$_POST['title'],$_POST['content'],$_POST['category'], date('Y-m-d h:i:s')];
    $statement->execute($criteria);
}
}

function checkArticleExists() {
    //redirect to new page if ID is not provided 
    if(isset($_GET['id']) == false) redirectHome();
}

function updateCategory() {
    //sets the category values in the database
if(isset($_POST['name'])) {
    global $pdo_db_connection;

    $statement = $pdo_db_connection->prepare("update category set name=? where id=?");
    $criteria = [$_POST['name'],$_GET['id']];
    $statement->execute($criteria);

}
}
