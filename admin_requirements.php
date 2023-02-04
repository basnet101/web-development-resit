<?php
$is_logged_in_user = false;

// checks whether the user is login or not
if(isset($_SESSION['login'])) {
    $is_logged_in_user = true;
} else {
    redirectHome();
}


//checks whether user has admin rights (if it is not admin redirect to the homepage) 
if($_SESSION['isAdmin'] == false) {
    redirectHome();
}
