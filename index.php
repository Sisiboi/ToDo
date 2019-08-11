<?php
include_once('userCheck.php');
include_once('library/classes/Lists.class.php');




$page = Lists::loadLists($_SESSION['user_id']);
var_dump($page);
        



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>To Do App</title>
</head>
<body>
    <h1>homepage</h1>

    <h1>Welcome</h1><a href="createList.php"><button type="button"  class="btn btn-primary btn-lg btn-block">Add new list +</button></a>
    <a class="btn btn-danger" href="logout.php">Log out</button></a>
    <?php if(isset($page)): ?>  
    <?php include_once('showLists.php'); ?>
          
    <?php else: ?>
       <h1>nog niks maat</h1>
    <?php endif; ?>
    
</body>
</html>