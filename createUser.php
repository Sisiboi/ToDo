<?php
session_start();
if ( isset($_SESSION['user_id'])) {
    include_once('library/classes/User.class.php');
    include_once('library/helpers/Security.class.php');
    $role = User::getUserRole($_SESSION['user_id'])['isAdmin'];
    if( $role == 1 ) {

    } else {
        die();
    }
} else {
    die();
}

if (!empty($_POST)) {

    try {
        $security = new Security();
        $security->password = $_POST['password'];
        $security->passwordRepeat = $_POST['password_repeat'];
        
        if ($security->passwordsCheck()) {
            $user = new User();
            $user->setUsername($_POST['username']);
            $user->setFirstName($_POST['first_name']);
            $user->setLastName($_POST['last_name']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            if( $user->register() ){
                header('Location: admin.php?upload=compleet');
            }
        }
    }
    catch (Exception $e){
                  
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>Document</title>
</head>
<body>
<?php include_once("nav.inc.php"); ?>
   <div class="container form">
   <h1>Create new user</h1>
   
    <div class="row">
        <div class="col-md-12">
          
        <form action="" method="post" >
 
        <?php if(isset($e)): ?>
        <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> <a href="#" class="alert-link"><?php echo $e->getMessage(); ?></a>, change and try submitting again.
</div>
                <?php endif; ?>
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
    
    <div class="form-group">
      <label for="password_repeat">Password repeat</label>
      <input type="password" id="password_repeat" name="password_repeat" placeholder="Password Repeat" class="form-control">
    </div>
    
    
    

  
    <input type="submit" value="Create" class="btn btn-primary">
  
</form>
        
        </div>
    </div>
</div>

  
</body>
</html>