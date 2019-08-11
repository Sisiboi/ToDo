<?php
session_start();
if ( isset($_SESSION['email'])) {

}
else {
    header('Location: index.php');
};

include_once('library/classes/Lists.class.php');
try {
    $list = new Lists();
    $list->deleteList($_POST['listsId']);    
}

catch (Exception $e){
  
}
