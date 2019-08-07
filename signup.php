<!DOCTYPE html>
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
          
        <form>
  <fieldset>
  
  <div class="form-group ">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" id="username" name="username" placeholder="Username" class="form-control">
     
    </div>
    <div class="form-group ">
      <label for="exampleInputEmail1">First name</label>
      <input type="text" id="first_name" name="first_name" placeholder="First name" class="form-control">
     
    </div>
    <div class="form-group ">
      <label for="exampleInputEmail1">Last name</label>
      <input type="text" id="last_name" name="last_name" placeholder="Last name" class="form-control">
     
    </div>
    <div class="form-group ">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" id="email" name="email" placeholder="Email" class="form-control">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" id="password" name="password" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password repeat</label>
      <input type="password" id="password_repeat" name="password_repeat" placeholder="Password repeat" class="form-control">
    </div>
    
    
    <small id="emailHelp" class="form-text text-muted">We'll never share your info with anyone else.</small>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
        
        </div>
    </div>
</div>

  
</body>
</html>