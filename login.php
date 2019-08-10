<?php 

session_start();
if ( isset($_SESSION['email'])) {
    header('Location: index.php');
}
include_once('library/classes/User.class.php');
if (!empty($_POST)) {
    try{
        $user = new User();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        if ($user->loginCheck()) {
            $user->login();
        }
    }
    catch(Exception $e) {

    }
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
   <h1>Login</h1>
   
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
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" id="email" name="email" placeholder="Email" class="form-control">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" id="password" name="password" placeholder="Password" class="form-control">
    </div>
  
    
    
    <small id="emailHelp" class="form-text text-muted">Don't have an account yet?  <strong>
        <a href="signup.php"> Register here!</a></strong></small>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
        
        </div>
    </div>
</div>

  
</body>
</html>