<?php
include_once('userCheck.php');
include_once('library/classes/Task.class.php');


$listID = $_GET['list'];
$page = Task::loadTasks($_SESSION['user_id'], $listID);





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>Document</title>
</head>
<body><?php include_once("nav.inc.php"); ?>
    

    
   

<a href="createTask.php?list=<?php echo  $listID ?>"><button type="button"  class="btn btn-primary btn-lg btn-block">Add new task +</button></a>
<h1>Overzicht taken</h1>




 <?php if(isset($page)): ?>  
    <?php include_once('showTasks.php'); ?>
          
    <?php else: ?>
       <h1>nog niks maat</h1>
       
    <?php endif; ?>



<script src="public_html/js/list.js"></script>
<script src="public_html/js/task.js"></script>

</body>
</html>