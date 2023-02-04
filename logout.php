<?php 
session_start();
require 'conn.php';
require 'helpers.php';

// destroying session
if(isset($_SESSION['login'])) {
    session_destroy();
    redirect('login');
} else {
   redirectHome();
}

?>