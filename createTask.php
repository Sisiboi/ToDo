<?php

include_once('userCheck.php');
include_once('library/classes/Task.class.php');
if (!empty($_POST)) {
  try {
      $upload = new Task();
     
      $upload->setDescription($_POST['description']);
      $upload->setWorkhours($_POST['workhours']);
      $upload->setDeadline($_POST['deadline']);
      
      
     
    
      $upload->postTask($_SESSION['user_id'], $_GET['list']);
      header('Location: task.php?list='.$_GET['list']);
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
<body><?php include_once("nav.inc.php"); ?>
<div class="container form">
<h1>Task</h1>
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
      <label for="title">Description</label>
      <input type="text" id="description" name="description" placeholder="Description" class="form-control" >
     
    </div>
    <div class="form-group ">
      <label for="workhours">Work hours</label>
      <input type="number" id="workhours" name="workhours" placeholder="work hours" class="form-control" >
     
    </div>

    <div class="form-group ">
      <label for="deadline">Deadline (optional)</label>
      <input type="date" id="deadline" name="deadline" placeholder="Deadline" class="form-control" >
     
    </div>
    <input type="submit" value="Sign up" class="btn btn-primary">

</fieldset>
</form>
</div> 
</div> 
</div> 


</body>
</html>