<?php

include_once('library/classes/User.class.php');

if (!empty($_POST)) {


     
     
          $user = new User();
          $user->setUsername($_POST['username']);
          $user->setFirstName($_POST['first_name']);
          $user->setLastName($_POST['last_name']);
          $user->setEmail($_POST['email']);
          $user->setPassword($_POST['password']);
          $user->register();
   
    
  
  
  
} 




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>Sign Up - To Do</title>
</head>
<body>
  
   <div class="container form">
   <h1>Sign Up</h1>
   
    <div class="row">
        <div class="col-md-12">
          
        <form action="" method="post" >
 
  
  <div class="form-group ">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Username" class="form-control" >
     
    </div>
    <div class="form-group ">
      <label for="first_name">First name</label>
      <input type="text" id="first_name" name="first_name" placeholder="First name" class="form-control">
     
    </div>
    <div class="form-group ">
      <label for="last_name">Last name</label>
      <input type="text" id="last_name" name="last_name" placeholder="Last name" class="form-control">
     
    </div>
    <div class="form-group ">
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" placeholder="Email" class="form-control">
     
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Password" class="form-control">
    </div>
    
    
    
    <small id="emailHelp" class="form-text text-muted">Already have an account?  <strong>
        <a href="signup.php"> Login here!</a></strong></small>
  
    <input type="submit" value="Sign up" class="btn btn-primary">
  
</form>
        
        </div>
    </div>
</div>

  
</body>
</html>