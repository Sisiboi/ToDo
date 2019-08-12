<?php
include_once('userCheck.php');
include_once('library/classes/Lists.class.php');




$page = Lists::loadLists($_SESSION['user_id']);





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>To Do App</title>
</head>
<body> <?php include_once("nav.inc.php"); ?>
  
<button type="button" class="btn btn-outline-primary">Primary</button>
    <a href="createList.php"><button type="button"  class="btn btn-primary btn-lg btn-block">Add new list +</button></a>
    
    <?php if(isset($page)): ?>  
    <?php include_once('showLists.php'); ?>
          
    <?php else: ?>
       <h1>nog niks maat</h1>
    <?php endif; ?>
    <script src="public_html/js/list.js"></script>
 
</body>
</html>