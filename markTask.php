<?php
session_start();
if ( isset($_SESSION['email'])) {
    include_once('library/classes/Task.class.php');
    $mark = Task::getMark($_POST['taskid'])['mark'];
    if( $mark == 1 ) {var_dump($_POST);
        if( isset($_POST['taskid']) && isset($_POST['mark']) ) {
            Task::setMark($_POST['taskid'], $_POST['mark']);
         
        }
        

    } else {var_dump($_POST);
        if( isset($_POST['taskid']) && isset($_POST['mark']) ) {
            Task::setMark($_POST['taskid'], $_POST['mark']);
         
        }
        
        die();
    }
} else {
    die();
}





