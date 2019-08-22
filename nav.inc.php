<?php 
if ( isset($_SESSION['user_id'])) {
    include_once('library/classes/User.class.php');
    $role = User::getUserRole($_SESSION['user_id'])['isAdmin'];
    
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">TaskManager™</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item">
        
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <?php  if( $role == 1 ):   ?>
    <a href="admin.php" class="btn btn-secondary">Admin</a>
<?php endif; ?>
    
      <a class="btn btn-danger" href="logout.php">Log out</a>
    </form>
  </div>
</nav>