<?php
session_start();
if ( isset($_SESSION['user_id'])) {
    include_once('library/classes/User.class.php');
    $role = User::getUserRole($_SESSION['user_id'])['isAdmin'];
    if( $role == 1 ) {

    } else {
        die();
    }
} else {
    die();
}

include_once('library/classes/User.class.php');
include_once('library/classes/Task.class.php');

    $users = User::getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once('header.inc.php'); ?>
    <title>Admin Panel</title>
</head>
<body>
    <?php include_once("nav.inc.php"); ?>
    <a href="createUser.php"><button type="button"  class="btn btn-primary btn-lg btn-block">Make new user</button></a>
    <table class="admin-table" style='width:100%;'>
        <tr class="table-active">
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
          
            <th>Password</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Role</th>
            <th>Delete</th>
            <th>Creation Date</th>
        </tr>
    <?php foreach ($users as $user): ?>
        <tr<?php if(  $user['deleted'] == 1 ){echo ' class="deleted"';}if(  $user['isAdmin'] == 1 ){echo ' class="isAdmin"';} ?>>
            <td class="table-primary"><?php echo $user['id']; ?></td>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td></td>
            <td><?php echo htmlspecialchars($user['first_name']); ?></td>
            <td><?php echo htmlspecialchars($user['last_name']); ?></td>
            <td>
            <a href="#" class="isAdmin" data-userid="<?php echo $user['id']; ?>"><?php if(  $user['isAdmin'] == 1 ){echo 'Remove Admin';} else {echo 'Make Admin';}; ?></a>
                  
              
            </td>
          
            <td><a href="#" class="delete" data-userid="<?php echo $user['id']; ?>"><?php if(  $user['deleted'] == 1 ){echo 'recover';} else {echo 'delete';}; ?></a></td>
            <td><?php echo $user['creation']; ?></td>
        </tr>
    <?php endforeach ?>
    </table>
    <script src="public_html/js/admin.js"></script>
</body>
</html>