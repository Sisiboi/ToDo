<?php
session_start();
if ( isset($_SESSION['email'])) {

}
else {
    header('Location: index.php');
};

include_once('library/classes/Task.class.php');
try {
    $task = new Task();
    $username =  $task->addComment($_POST['comment'], $_SESSION['user_id'], $_POST['taskId']);
    echo $username['username'];
}

catch (Exception $e){
  
}



