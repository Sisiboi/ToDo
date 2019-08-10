<?php


include_once('userCheck.php');
include_once('library/classes/Lists.class.php');
if (!empty($_POST)) {
  try {
      $upload = new Lists();
     
      $upload->setTitle($_POST['title']);
      $upload->postLists($_SESSION['user_id']);
   
  }
  catch (Exception $e){

  }
  
} 






?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>Document</title>
</head>
<body>
<div class="container form">
   <h1>New list</h1>
   
    <div class="row">
        <div class="col-md-12">
          
       <form action="" method="post" >
  <fieldset>
  <?php if(isset($e)): ?>
        <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> <a href="#" class="alert-link"><?php echo $e->getMessage(); ?></a>, suck a dick.
</div>
                <?php endif; ?>

    <div class="form-group ">
      <label for="title">Title</label>
      <input type="text" id="title" name="title" placeholder="Title" class="form-control">
     
    </div>
    
    
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
        
        </div>
    </div>
</div>
</body>
</html>