<?php
session_start();
if ( isset($_SESSION['user_id'])) {
    include_once('library/classes/User.class.php');
    $role = User::getUserRole($_SESSION['user_id'])['isAdmin'];

    if( $role == 1 ) {

    } else {
        die();
    }
} else {
    die();
}

var_dump($_POST);
if( isset($_POST['user']) && isset($_POST['admin']) ) {
    User::updateRole($_POST['user'], $_POST['admin']);
   
    
}






if( isset($_POST['user']) && isset($_POST['del']) ) {
    User::deleteAccount($_POST['user'], $_POST['del']);
 
}